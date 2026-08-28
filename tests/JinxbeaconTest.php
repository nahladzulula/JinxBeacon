<?php
/**
 * Tests for JinxBeacon
 */

use PHPUnit\Framework\TestCase;
use Jinxbeacon\Jinxbeacon;

class JinxbeaconTest extends TestCase {
    private Jinxbeacon $instance;

    protected function setUp(): void {
        $this->instance = new Jinxbeacon(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Jinxbeacon::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
