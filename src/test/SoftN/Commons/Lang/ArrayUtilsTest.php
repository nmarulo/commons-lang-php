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
    
    public function testIsAllNull() {
        $this->assertTrue(ArrayUtils::isAllNull(NULL));
        $this->assertTrue(ArrayUtils::isAllNull([NULL]));
        $this->assertTrue(ArrayUtils::isAllNull([NULL, [NULL]], TRUE));
        $this->asserttrue(ArrayUtils::isAllNull([NULL, [NULL, [NULL, [NULL, [NULL, NULL]]]]], TRUE));
        $this->assertFalse(ArrayUtils::isAllNull(["", NULL]));
        $this->assertFalse(ArrayUtils::isAllNull(["a", [NULL]], TRUE));
        $this->assertFalse(ArrayUtils::isAllNull(["a", ["b", ["c", ["d", ["f", NULL]]]]], TRUE));
        $this->assertFalse(ArrayUtils::isAllNull(["a", [NULL]]));
        $this->assertFalse(ArrayUtils::isAllNull(["a", [NULL, ["a"]]]));
    }
    
    
}
