<?php

namespace SoftN\Commons\Lang;

use PHPUnit\Framework\TestCase;

/**
 * Class StringUtilsTest
 * @author Nicolás Marulanda P.
 */
class StringUtilsTest extends TestCase {
    
    public function testIsEmpty() {
        $this->assertTrue(StringUtils::isEmpty(NULL));
        $this->assertTrue(StringUtils::isEmpty(""));
        $this->assertFalse(StringUtils::isEmpty("a"));
        $this->assertFalse(StringUtils::isEmpty(" ab "));
    }
    
}
