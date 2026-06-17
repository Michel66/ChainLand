<?php
/**
 * Tests for ChainLand
 */

use PHPUnit\Framework\TestCase;
use Chainland\Chainland;

class ChainlandTest extends TestCase {
    private Chainland $instance;

    protected function setUp(): void {
        $this->instance = new Chainland(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chainland::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
