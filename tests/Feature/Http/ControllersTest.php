<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Tests\Feature\Http;

use CodebarAg\MicrosoftEntraSSO\Flow\FlowState;
use CodebarAg\MicrosoftEntraSSO\Flow\FlowStateStore;
use CodebarAg\MicrosoftEntraSSO\Tests\Support\FakeEntra;
use CodebarAg\MicrosoftEntraSSO\Tests\TestCase;
use CodebarAg\MicrosoftEntraSSO\Tests\TestUser;
use PHPUnit\Framework\Attributes\Test;

final class ControllersTest extends TestCase
{
    /**
     * @return array<string, mixed>
     */
    private function flowSession(FlowState $flow): array
    {
        return [FlowStateStore::KEY => $flow->toArray()];
    }

    #[Test]
    public function the_redirect_controller_sends_the_browser_to_microsoft(): void
    {
        $response = $this->get('/sso/microsoft/web/redirect');

        $response->assertRedirectContains('https://login.microsoftonline.com/'.FakeEntra::TENANT.'/oauth2/v2.0/authorize?');
        $flow = FlowState::fromSession(session(FlowStateStore::KEY));
        self::assertNotNull($flow);
        self::assertStringContainsString('state='.$flow->state, (string) $response->headers->get('Location'));
    }

    #[Test]
    public function an_unconfigured_guard_is_a_404(): void
    {
        $this->get('/sso/microsoft/admin/redirect')->assertNotFound();
        $this->get('/sso/microsoft/admin/callback')->assertNotFound();
    }

    #[Test]
    public function a_disallowed_redirect_host_goes_back_to_the_login_page_with_a_message(): void
    {
        $this->settings()->set('microsoft-entra-sso.allowed_redirect_hosts', ['app.example.com']);

        $this->get('/sso/microsoft/web/redirect')
            ->assertRedirect('/login')
            ->assertSessionHas('microsoft_entra_sso_error', __('microsoft-entra-sso.error.invalid_redirect_uri'));
    }

    #[Test]
    public function a_successful_callback_logs_in_and_redirects_to_the_configured_path(): void
    {
        $flow = FlowState::begin('web');
        $entra = $this->entra();
        $entra->fake(['id_token' => $entra->idToken(['nonce' => $flow->nonce])]);

        $this->withSession($this->flowSession($flow))
            ->get('/sso/microsoft/web/callback?code=auth-code&state='.$flow->state)
            ->assertRedirect('/dashboard');

        $this->assertAuthenticated('web');
        self::assertSame(1, TestUser::count());
    }

    #[Test]
    public function a_callback_honours_the_intended_url(): void
    {
        $flow = FlowState::begin('web');
        $entra = $this->entra();
        $entra->fake(['id_token' => $entra->idToken(['nonce' => $flow->nonce])]);

        $this->withSession($this->flowSession($flow) + ['url.intended' => 'http://localhost/account'])
            ->get('/sso/microsoft/web/callback?code=auth-code&state='.$flow->state)
            ->assertRedirect('/account');
    }

    #[Test]
    public function a_failed_callback_flashes_the_translated_error_to_the_configured_route(): void
    {
        $this->settings()->set('microsoft-entra-sso.error_flash_key', 'sso_error');

        $this->get('/sso/microsoft/web/callback?code=x&state=forged')
            ->assertRedirect('/login')
            ->assertSessionHas('sso_error', __('microsoft-entra-sso.error.state_invalid'));

        $this->assertGuest('web');
    }

    #[Test]
    public function it_falls_back_to_the_root_when_the_login_route_does_not_exist(): void
    {
        $this->settings()->set('microsoft-entra-sso.login_route', 'no-such-route');

        $this->get('/sso/microsoft/web/callback')->assertRedirect('/');
    }

    #[Test]
    public function the_callback_tolerates_array_parameters(): void
    {
        $this->get('/sso/microsoft/web/callback?code[]=x&state[]=y')->assertRedirect('/login');
    }

    #[Test]
    public function an_invalid_configuration_is_not_swallowed(): void
    {
        $this->settings()->set('microsoft-entra-sso.client_id', null);
        $this->withoutExceptionHandling();

        $this->expectExceptionMessage('client_id');

        $this->get('/sso/microsoft/web/redirect');
    }
}
