<?php
/**
 * ArrayUtilsTest.php
 */

namespace SoftN\Commons\Lang;

use PHPUnit\Framework\TestCase;

class ArrayUtilsTest extends TestCase {
    
    public function testIsEmpty() {
        $this->assertTrue(ArrayUtils::isEmpty(NULL));
        $this->assertTrue(ArrayUtils::isEmpty([]));
        $this->assertFalse(ArrayUtils::isEmpty([""]));
        $this->assertFalse(ArrayUtils::isEmpty(["a"]));
    }
}
