<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Identity;

use CodebarAg\MicrosoftEntraSSO\Support\Guid;
use InvalidArgumentException;

/**
 * The stable identity of a person: the directory (tid) and the object in it (oid).
 */
final readonly class EntraIdentity
{
    /** The tenant id Microsoft uses for personal Microsoft accounts. */
    public const string PERSONAL_ACCOUNT_TENANT = '9188040d-6c67-4c5b-b112-36a304b66dad';

    public string $tenantId;

    public string $objectId;

    public function __construct(string $tenantId, string $objectId)
    {
        if (! Guid::isValid($tenantId) || ! Guid::isValid($objectId)) {
            throw new InvalidArgumentException('An Entra identity needs a tenant id and an object id that are GUIDs.');
        }

        $this->tenantId = Guid::normalize($tenantId);
        $this->objectId = Guid::normalize($objectId);
    }

    public function equals(self $other): bool
    {
        return $this->tenantId === $other->tenantId && $this->objectId === $other->objectId;
    }

    public function isPersonalAccount(): bool
    {
        return $this->tenantId === self::PERSONAL_ACCOUNT_TENANT;
    }
}
