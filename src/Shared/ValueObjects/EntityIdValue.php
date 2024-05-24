<?php

namespace Baezeta\Admin\Shared\ValueObjects;

use Ramsey\Uuid\Uuid;
use Baezeta\Admin\Shared\ValueObjects\Value;
use Baezeta\Admin\Shared\Exceptions\ValueObjects\UuidException;

class EntityIdValue implements Value
{
    public function __construct(
        public readonly string $uuid7
    ) {
        if (!is_string($uuid7)) {
            throw UuidException::drop($uuid7);
        }

        if (!isUuid($uuid7)) {
            throw UuidException::drop($uuid7);
        }
    }

    public static function create(): self
    {
        return new self(Uuid::uuid7()->toString());
    }

    public function value(): mixed
    {
        return $this->uuid7;
    }
}