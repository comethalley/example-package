<?php

namespace Examplepackage\ExamplePackage\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Examplepackage\ExamplePackage\ExamplePackage
 */
class ExamplePackage extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Examplepackage\ExamplePackage\ExamplePackage::class;
    }
}
