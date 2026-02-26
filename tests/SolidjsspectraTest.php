<?php
/**
 * Tests for SolidjsSpectra
 */

use PHPUnit\Framework\TestCase;
use Solidjsspectra\Solidjsspectra;

class SolidjsspectraTest extends TestCase {
    private Solidjsspectra $instance;

    protected function setUp(): void {
        $this->instance = new Solidjsspectra(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Solidjsspectra::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
