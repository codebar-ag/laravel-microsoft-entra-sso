<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Identity;

/**
 * What Microsoft Graph says about the person who just signed in.
 */
final readonly class Profile
{
    public function __construct(
        public string $graphId,
        public string $name,
        public string $email,
        public ?string $jobTitle = null,
        public ?string $department = null,
    ) {}
}
