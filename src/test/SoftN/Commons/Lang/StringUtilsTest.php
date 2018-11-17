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
    
    public function testIsNotEmpty() {
        $this->assertFalse(StringUtils::isNotEmpty(NULL));
        $this->assertFalse(StringUtils::isNotEmpty(""));
        $this->assertTrue(StringUtils::isNotEmpty("a"));
        $this->assertTrue(StringUtils::isNotEmpty(" ab "));
    }
    
    public function testIsAnyEmpty() {
        $this->assertTrue(StringUtils::isAnyEmpty(NULL));
        $this->assertTrue(StringUtils::isAnyEmpty(""));
        $this->assertTrue(StringUtils::isAnyEmpty(NULL, ""));
        $this->assertTrue(StringUtils::isAnyEmpty("a", "b", 1, ""));
        $this->assertFalse(StringUtils::isAnyEmpty("a", "b", 1));
    }
    
    public function testIsNoneEmpty() {
        $this->assertFalse(StringUtils::isNoneEmpty(NULL));
        $this->assertFalse(StringUtils::isNoneEmpty(""));
        $this->assertFalse(StringUtils::isNoneEmpty(NULL, ""));
        $this->assertFalse(StringUtils::isNoneEmpty("a", "b", 1, ""));
        $this->assertTrue(StringUtils::isNoneEmpty("a", "b", 1));
    }
}
