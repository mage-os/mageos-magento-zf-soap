<?php

namespace LaminasTest\Soap;

use PHPUnit\Framework\Assert;
use ReflectionProperty;

trait DeprecatedAssertionsTrait
{
    /** @param mixed $expected */
    public static function assertAttributeEquals(
        $expected,
        string $attribute,
        object $instance,
        string $message = ''
    ): void {
        $r = new ReflectionProperty($instance, $attribute);
        // setAccessible() is deprecated in PHP 8.5 and no longer needed
        Assert::assertEquals($expected, $r->getValue($instance), $message);
    }
}
