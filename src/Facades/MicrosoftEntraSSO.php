<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Facades;

use CodebarAg\MicrosoftEntraSSO\Graph\GraphProfileService;
use Illuminate\Support\Facades\Facade;

/**
 * Microsoft Graph for a signed-in user.
 *
 * @method static \CodebarAg\MicrosoftEntraSSO\Graph\GraphProfile profile(\CodebarAg\MicrosoftEntraSSO\Contracts\SsoUser $user)
 * @method static list<\CodebarAg\MicrosoftEntraSSO\Graph\Group> groups(\CodebarAg\MicrosoftEntraSSO\Contracts\SsoUser $user)
 * @method static string|null photo(\CodebarAg\MicrosoftEntraSSO\Contracts\SsoUser $user)
 * @method static bool isMemberOf(\CodebarAg\MicrosoftEntraSSO\Contracts\SsoUser $user, string $groupId)
 *
 * @see GraphProfileService
 */
final class MicrosoftEntraSSO extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return GraphProfileService::class;
    }
}
