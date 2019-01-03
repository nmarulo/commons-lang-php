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
    
    public function testStripStart() {
        $this->assertEquals(NULL, StringUtils::stripStart(NULL, ""));
        $this->assertEquals("", StringUtils::stripStart("", ""));
        $this->assertEquals("abc", StringUtils::stripStart("abc", ""));
        $this->assertEquals("abc", StringUtils::stripStart("  abc", NULL));
        $this->assertEquals("abc   ", StringUtils::stripStart("abc   ", NULL));
        $this->assertEquals("abc  ", StringUtils::stripStart("xyzabc  ", "xyz"));
        $this->assertEquals("yzabc  ", StringUtils::stripStart("xyzabc  ", "x"));
        $this->assertEquals("abc", StringUtils::stripStart("----abc", "-"));
    }
    
    public function testStripEnd() {
        $this->assertEquals(NULL, StringUtils::stripEnd(NULL, ""));
        $this->assertEquals("", StringUtils::stripEnd("", ""));
        $this->assertEquals("abc", StringUtils::stripEnd("abc", ""));
        $this->assertEquals("abc", StringUtils::stripEnd("abc  ", NULL));
        $this->assertEquals("   abc", StringUtils::stripEnd("   abc", NULL));
        $this->assertEquals("  abc", StringUtils::stripEnd("  abcxyz", "xyz"));
        $this->assertEquals("  abcyz", StringUtils::stripEnd("  abcyzx", "x"));
        $this->assertEquals("abc", StringUtils::stripEnd("abc----", "-"));
    }
    
    public function testStrip() {
        $this->assertEquals(NULL, StringUtils::strip(NULL, ""));
        $this->assertEquals("abc", StringUtils::strip("----abc----", "-"));
        $this->assertEquals("abc", StringUtils::strip("xyzabcx", "xyz"));
        $this->assertEquals("abcxa", StringUtils::strip("xyzabcxa", "xyz"));
        $this->assertEquals("  abc  ", StringUtils::strip("  abc  ", "a"));
    }
    
    public function testStripAll() {
        $this->assertEquals(NULL, StringUtils::stripAll(NULL, NULL));
        $this->assertEquals(["abc"], StringUtils::stripAll("-", "----abc----"));
        $this->assertEquals(["abc", "abcxa"], StringUtils::stripAll("xyz", "xyzabcx", "xyzabcxa"));
        $this->assertEquals(["abc", NULL], StringUtils::stripAll("xyz", "xyzabcx", NULL));
    }
    
    public function testStripWhitespace() {
        $this->assertEquals(NULL, StringUtils::stripWhitespace(NULL, NULL));
        $this->assertEquals(["abc", "-abc-"], StringUtils::stripWhitespace(" abc    ", "-abc-"));
        $this->assertEquals(["abc", NULL], StringUtils::stripWhitespace("abc", NULL));
    }
    
    public function testStripAccents() {
        $this->assertEquals(NULL, StringUtils::stripAccents(NULL));
        $this->assertEquals("", StringUtils::stripAccents(""));
        $this->assertEquals("aeiou", StringUtils::stripAccents("aeiou"));
        $this->assertEquals("aeiou", StringUtils::stripAccents("aéiou"));
        $this->assertEquals("aeiou", StringUtils::stripAccents("a&eacute;iou"));
    }
    
    public function testEquals() {
        $this->assertTrue(StringUtils::equals(NULL, NULL));
        $this->assertTrue(StringUtils::equals("", ""));
        $this->assertTrue(StringUtils::equals("abc", "abc"));
        $this->assertTrue(StringUtils::equals("ábc", "ábc"));
        $this->assertTrue(StringUtils::equals("ABC", "ABC"));
        $this->assertTrue(StringUtils::equals("ÁBC", "ÁBC"));
        $this->assertTrue(StringUtils::equals("abcé", "abcé"));
        $this->assertFalse(StringUtils::equals("abc", "abcde"));
        $this->assertFalse(StringUtils::equals("abc", "cab"));
        $this->assertFalse(StringUtils::equals("abc", "ABC"));
        $this->assertFalse(StringUtils::equals("abc", NULL));
        $this->assertFalse(StringUtils::equals(NULL, ""));
        $this->assertFalse(StringUtils::equals("abc", ""));
    }
    
    public function testEqualsIgnoreCase() {
        $this->assertTrue(StringUtils::equalsIgnoreCase(NULL, NULL));
        $this->assertTrue(StringUtils::equalsIgnoreCase("", ""));
        $this->assertTrue(StringUtils::equalsIgnoreCase("abc", "abc"));
        $this->assertTrue(StringUtils::equalsIgnoreCase("ábc", "ábc"));
        $this->assertTrue(StringUtils::equalsIgnoreCase("ABC", "ABC"));
        $this->assertTrue(StringUtils::equalsIgnoreCase("ÁBC", "ÁBC"));
        $this->assertTrue(StringUtils::equalsIgnoreCase("abcé", "abcé"));
        $this->assertTrue(StringUtils::equalsIgnoreCase("abc", "ABC"));
        $this->assertTrue(StringUtils::equalsIgnoreCase("ábc", "ÁBC", TRUE));
        $this->assertFalse(StringUtils::equalsIgnoreCase("ábc", "ÁBC"));
        $this->assertFalse(StringUtils::equalsIgnoreCase("abc", "abcde"));
        $this->assertFalse(StringUtils::equalsIgnoreCase("abc", "cab"));
        $this->assertFalse(StringUtils::equalsIgnoreCase("abc", NULL));
        $this->assertFalse(StringUtils::equalsIgnoreCase(NULL, ""));
        $this->assertFalse(StringUtils::equalsIgnoreCase("abc", ""));
    }
    
    public function testCompare() {
        $this->assertEquals(0, StringUtils::compare(NULL, NULL));
        $this->assertEquals(0, StringUtils::compare("", ""));
        $this->assertEquals(0, StringUtils::compare("abc", "abc"));
        $this->assertTrue(StringUtils::compare(NULL, "a") < 0);
        $this->assertTrue(StringUtils::compare(NULL, "a", FALSE) > 0);
        $this->assertTrue(StringUtils::compare("a", NULL) > 0);
        $this->assertTrue(StringUtils::compare("a", NULL, FALSE) < 0);
        $this->assertTrue(StringUtils::compare("a", "b") < 0);
        $this->assertTrue(StringUtils::compare("b", "a") > 0);
        $this->assertTrue(StringUtils::compare("a", "B") > 0);
        $this->assertTrue(StringUtils::compare("abc", "abd") < 0);
        $this->assertTrue(StringUtils::compare("ab", "abc") < 0);
        $this->assertTrue(StringUtils::compare("ab", "ab ") < 0);
        $this->assertTrue(StringUtils::compare("abc", "ab ") > 0);
    }
    
    public function testCompareIgnoreCase() {
        $this->assertEquals(0, StringUtils::compareIgnoreCase(NULL, NULL));
        $this->assertEquals(0, StringUtils::compareIgnoreCase("", ""));
        $this->assertEquals(0, StringUtils::compareIgnoreCase("abc", "abc"));
        $this->assertEquals(0, StringUtils::compareIgnoreCase("abc", "ABC"));
        $this->assertTrue(StringUtils::compareIgnoreCase(NULL, "a") < 0);
        $this->assertTrue(StringUtils::compareIgnoreCase(NULL, "a", FALSE) > 0);
        $this->assertTrue(StringUtils::compareIgnoreCase("a", NULL) > 0);
        $this->assertTrue(StringUtils::compareIgnoreCase("a", NULL, FALSE) < 0);
        $this->assertTrue(StringUtils::compareIgnoreCase("a", "b") < 0);
        $this->assertTrue(StringUtils::compareIgnoreCase("b", "a") > 0);
        $this->assertTrue(StringUtils::compareIgnoreCase("a", "B") < 0);
        $this->assertTrue(StringUtils::compareIgnoreCase("A", "b") < 0);
        $this->assertTrue(StringUtils::compareIgnoreCase("abc", "abd") < 0);
        $this->assertTrue(StringUtils::compareIgnoreCase("ab", "abc") < 0);
        $this->assertTrue(StringUtils::compareIgnoreCase("ab", "ab ") < 0);
        $this->assertTrue(StringUtils::compareIgnoreCase("abc", "ab ") > 0);
        $this->assertTrue(StringUtils::compareIgnoreCase("abc", "ABD") < 0);
        $this->assertTrue(StringUtils::compareIgnoreCase("ab", "ABC") < 0);
        $this->assertTrue(StringUtils::compareIgnoreCase("ab", "AB ") < 0);
        $this->assertTrue(StringUtils::compareIgnoreCase("abc", "AB ") > 0);
    }
}
