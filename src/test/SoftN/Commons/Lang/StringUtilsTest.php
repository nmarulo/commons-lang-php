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
    
    public function testIsAllEmpty() {
        $this->assertTrue(StringUtils::isAllEmpty(NULL));
        $this->assertTrue(StringUtils::isAllEmpty(""));
        $this->assertTrue(StringUtils::isAllEmpty(NULL, ""));
        $this->assertFalse(StringUtils::isAllEmpty("a", "b", 1, ""));
        $this->assertFalse(StringUtils::isAllEmpty("a", "b", 1));
    }
    
    public function testIsBlank() {
        $this->assertTrue(StringUtils::isBlank(NULL));
        $this->assertTrue(StringUtils::isBlank(""));
        $this->assertTrue(StringUtils::isBlank("               "));
        $this->assertTrue(StringUtils::isBlank("\n\r\t", FALSE));
        $this->assertFalse(StringUtils::isBlank("\n\r\t"));
        $this->assertFalse(StringUtils::isBlank("a"));
        $this->assertFalse(StringUtils::isBlank("    a         "));
    }
    
    public function testIsNotBlank() {
        $this->assertFalse(StringUtils::isNotBlank(NULL));
        $this->assertFalse(StringUtils::isNotBlank(""));
        $this->assertFalse(StringUtils::isNotBlank("               "));
        $this->assertFalse(StringUtils::isNotBlank("\n\r\t", FALSE));
        $this->assertTrue(StringUtils::isNotBlank("\n\r\t"));
        $this->assertTrue(StringUtils::isNotBlank("a"));
        $this->assertTrue(StringUtils::isNotBlank("    a         "));
    }
    
    public function testIsAnyBlank() {
        $this->assertTrue(StringUtils::isAnyBlank(NULL));
        $this->assertTrue(StringUtils::isAnyBlank(""));
        $this->assertTrue(StringUtils::isAnyBlank(NULL, " "));
        $this->assertTrue(StringUtils::isAnyBlank("a", " "));
        $this->assertTrue(StringUtils::isAnyBlank("a", "\r\n\t"));
        $this->assertFalse(StringUtils::isAnyBlank("a", "b\r\n\t"));
        $this->assertFalse(StringUtils::isAnyBlank("a", " b        "));
        $this->assertFalse(StringUtils::isAnyBlank("a", "b"));
    }
    
    public function testIsAnyBlankSpace() {
        $this->assertTrue(StringUtils::isAnyBlankSpace(NULL));
        $this->assertTrue(StringUtils::isAnyBlankSpace(""));
        $this->assertTrue(StringUtils::isAnyBlankSpace(NULL, " "));
        $this->assertTrue(StringUtils::isAnyBlankSpace("a", " "));
        $this->assertFalse(StringUtils::isAnyBlankSpace("a", "\r\n\t"));
        $this->assertFalse(StringUtils::isAnyBlankSpace("a", "b\r\n\t"));
        $this->assertFalse(StringUtils::isAnyBlankSpace("a", " b        "));
        $this->assertFalse(StringUtils::isAnyBlankSpace("a", "b"));
    }
    
    public function testIsNoneBlank() {
        $this->assertFalse(StringUtils::isNoneBlank(NULL));
        $this->assertFalse(StringUtils::isNoneBlank(""));
        $this->assertFalse(StringUtils::isNoneBlank(NULL, " "));
        $this->assertFalse(StringUtils::isNoneBlank("a", " "));
        $this->assertFalse(StringUtils::isNoneBlank("a", "\r\n\t"));
        $this->assertTrue(StringUtils::isNoneBlank("a", "b\r\n\t"));
        $this->assertTrue(StringUtils::isNoneBlank("a", " b        "));
        $this->assertTrue(StringUtils::isNoneBlank("a", "b"));
    }
    
    public function testIsNoneBlankSpace() {
        $this->assertFalse(StringUtils::isNoneBlankSpace(NULL));
        $this->assertFalse(StringUtils::isNoneBlankSpace(""));
        $this->assertFalse(StringUtils::isNoneBlankSpace(NULL, " "));
        $this->assertFalse(StringUtils::isNoneBlankSpace("a", " "));
        $this->assertTrue(StringUtils::isNoneBlankSpace("a", "\r\n\t"));
        $this->assertTrue(StringUtils::isNoneBlankSpace("a", "b\r\n\t"));
        $this->assertTrue(StringUtils::isNoneBlankSpace("a", " b        "));
        $this->assertTrue(StringUtils::isNoneBlankSpace("a", "b"));
    }
    
    public function testIsAllBlank() {
        $this->assertTrue(StringUtils::isAllBlank(NULL));
        $this->assertTrue(StringUtils::isAllBlank(""));
        $this->assertTrue(StringUtils::isAllBlank(NULL, " "));
        $this->assertFalse(StringUtils::isAllBlank("a", " "));
        $this->assertFalse(StringUtils::isAllBlank("a", "\r\n\t"));
        $this->assertFalse(StringUtils::isAllBlank("a", "b\r\n\t"));
        $this->assertFalse(StringUtils::isAllBlank("a", " b        "));
        $this->assertFalse(StringUtils::isAllBlank("a", "b"));
    }
    
    public function testIsAllBlankSpace() {
        $this->assertTrue(StringUtils::isAllBlankSpace(NULL));
        $this->assertTrue(StringUtils::isAllBlankSpace(""));
        $this->assertTrue(StringUtils::isAllBlankSpace(NULL, " "));
        $this->assertFalse(StringUtils::isAllBlankSpace("a", " "));
        $this->assertFalse(StringUtils::isAllBlankSpace("a", "\r\n\t"));
        $this->assertFalse(StringUtils::isAllBlankSpace("a", "b\r\n\t"));
        $this->assertFalse(StringUtils::isAllBlankSpace("a", " b        "));
        $this->assertFalse(StringUtils::isAllBlankSpace("a", "b"));
    }
    
    public function testTrim() {
        $this->assertEmpty(StringUtils::trimWhiteSpaces(NULL));
        $this->assertEmpty(StringUtils::trimWhiteSpaces(" "));
        $this->assertNotEmpty(StringUtils::trimWhiteSpaces(" a "));
        $this->assertNotEmpty(StringUtils::trimWhiteSpaces("\r\n\t"));
        $this->assertEquals(StringUtils::trimWhiteSpaces(" a   "), "a");
    }
}
