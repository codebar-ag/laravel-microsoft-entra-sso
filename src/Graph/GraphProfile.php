<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Graph;

/**
 * The extended Microsoft Graph /me profile.
 */
final readonly class GraphProfile
{
    /**
     * @param  list<string>  $businessPhones
     */
    public function __construct(
        public string $id,
        public ?string $displayName,
        public ?string $givenName,
        public ?string $surname,
        public ?string $mail,
        public ?string $userPrincipalName,
        public ?string $jobTitle,
        public ?string $department,
        public ?string $officeLocation,
        public ?string $mobilePhone,
        public array $businessPhones,
        public ?string $city,
        public ?string $state,
        public ?string $country,
        public ?string $postalCode,
        public ?string $companyName,
        public ?string $employeeId,
    ) {}
}
