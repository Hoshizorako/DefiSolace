<?php
/**
 * Tests for DefiSolace
 */

use PHPUnit\Framework\TestCase;
use Defisolace\Defisolace;

class DefisolaceTest extends TestCase {
    private Defisolace $instance;

    protected function setUp(): void {
        $this->instance = new Defisolace(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Defisolace::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
