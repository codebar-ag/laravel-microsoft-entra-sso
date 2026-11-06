<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Graph;

final readonly class Group
{
    public function __construct(
        public string $id,
        public ?string $displayName,
        public ?string $description,
    ) {}
}
