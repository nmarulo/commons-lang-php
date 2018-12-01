<?php

namespace SoftN\Commons\Lang;

use PHPUnit\Framework\TestCase;

/**
 * Class CharUtilsTest
 * @author Nicolás Marulanda P.
 */
class CharUtilsTest extends TestCase {
    
    public function testWhitespace() {
        $this->assertEquals(' ', CharUtils::whitespace());
    }
    
    public function testIsWhitespace() {
        $this->assertTrue(CharUtils::isWhitespace(' '));
        $this->assertTrue(CharUtils::isWhitespace("\n"));
        $this->assertTrue(CharUtils::isWhitespace("\t"));
        $this->assertTrue(CharUtils::isWhitespace("\r"));
        $this->assertFalse(CharUtils::isWhitespace(''));
    }
}
