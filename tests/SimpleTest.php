<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class SimpleTest extends TestCase
{
    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            'BeerPHP',
            'Beer' . 'PHP'
        );
    }
}
