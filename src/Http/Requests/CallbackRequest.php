<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Http\Requests;

use CodebarAg\MicrosoftEntraSSO\Flow\CallbackParameters;
use Illuminate\Foundation\Http\FormRequest;

/**
 * The callback query. Tolerant on purpose: anything that is not a string is treated as absent,
 * the flow then refuses it with a proper sign-in failure instead of a validation redirect.
 */
final class CallbackRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, never>
     */
    public function rules(): array
    {
        return [];
    }

    public function parameters(): CallbackParameters
    {
        return new CallbackParameters(
            code: $this->text('code'),
            state: $this->text('state'),
            error: $this->text('error'),
            errorDescription: $this->text('error_description'),
        );
    }

    private function text(string $key): ?string
    {
        $value = $this->query($key);

        return is_string($value) && $value !== '' ? $value : null;
    }
}
