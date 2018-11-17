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
}
