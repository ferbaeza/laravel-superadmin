<?php

namespace Baezeta\Admin\Shared\ValueObjects;

use Illuminate\Support\Str;
use Baezeta\Admin\Shared\ValueObjects\Value;
use Baezeta\Admin\Shared\Exceptions\ValueObjects\UuidException;

class UuidValue implements Value
{
    public function __construct(
        public readonly string $uuid
    ) {
        if (!str($uuid)->isUuid()) {
            throw UuidException::drop($uuid);
        }
    }

    public static function create(): self
    {
        return new self(Str::uuid());
    }

    public function value(): string
    {
        return $this->uuid;
    }

}
