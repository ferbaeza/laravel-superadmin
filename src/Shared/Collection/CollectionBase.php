<?php

namespace Baezeta\Admin\Shared\Collection;

class CollectionBase extends CustomPackageCollection
{
    protected $name ;
    protected $type ;

    public function __construct()
    {
        parent::__construct();
    }
}
