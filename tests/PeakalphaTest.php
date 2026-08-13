<?php
/**
 * Tests for PeakAlpha
 */

use PHPUnit\Framework\TestCase;
use Peakalpha\Peakalpha;

class PeakalphaTest extends TestCase {
    private Peakalpha $instance;

    protected function setUp(): void {
        $this->instance = new Peakalpha(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Peakalpha::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
