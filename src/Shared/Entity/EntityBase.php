<?php

namespace Baezeta\Admin\Shared\Entity;

use Baezeta\Admin\Shared\Base\BasePackageEntity;

class EntityBase extends BasePackageEntity
{
    public function serialize(): mixed
    {
        return get_object_vars($this);
    }
}
