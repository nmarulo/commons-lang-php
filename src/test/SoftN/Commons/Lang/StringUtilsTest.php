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
    
    public function testEqualsAny() {
        $this->assertFalse(StringUtils::equalsAny("abc"));
        $this->assertFalse(StringUtils::equalsAny("abc", NULL));
        $this->assertFalse(StringUtils::equalsAny("abc", NULL, NULL));
        $this->assertFalse(StringUtils::equalsAny("abc", ""));
        $this->assertFalse(StringUtils::equalsAny(NULL, ""));
        $this->assertFalse(StringUtils::equalsAny("abc", "def"));
        $this->assertFalse(StringUtils::equalsAny("abc", "ABC"));
        $this->assertTrue(StringUtils::equalsAny(NULL, NULL, NULL));
        $this->assertTrue(StringUtils::equalsAny("abc", "def", "abc"));
        $this->assertTrue(StringUtils::equalsAny("abc", "abc"));
    }
    
    public function testEqualsAnyIgnoreCase() {
        $this->assertFalse(StringUtils::equalsAnyIgnoreCase("abc"));
        $this->assertFalse(StringUtils::equalsAnyIgnoreCase("abc", NULL));
        $this->assertFalse(StringUtils::equalsAnyIgnoreCase("abc", NULL, NULL));
        $this->assertFalse(StringUtils::equalsAnyIgnoreCase("abc", ""));
        $this->assertFalse(StringUtils::equalsAnyIgnoreCase(NULL, ""));
        $this->assertFalse(StringUtils::equalsAnyIgnoreCase("abc", "def"));
        $this->assertTrue(StringUtils::equalsAnyIgnoreCase("abc", "ABC"));
        $this->assertTrue(StringUtils::equalsAnyIgnoreCase(NULL, NULL, NULL));
        $this->assertTrue(StringUtils::equalsAnyIgnoreCase("abc", "def", "abc"));
        $this->assertTrue(StringUtils::equalsAnyIgnoreCase("abc", "abc"));
    }
    
    public function testIndexOf() {
        $this->assertEquals(-1, StringUtils::indexOf(NULL, NULL));
        $this->assertEquals(-1, StringUtils::indexOf("", ""));
        $this->assertEquals(-1, StringUtils::indexOf("aabbccdefgh", NULL));
        $this->assertEquals(-1, StringUtils::indexOf("aabbccdefgh", ""));
        $this->assertEquals(-1, StringUtils::indexOf(NULL, "a"));
        $this->assertEquals(-1, StringUtils::indexOf("aabbccdefgh", 'ccc'));
        $this->assertEquals(-1, StringUtils::indexOf("qqwweeqqwwee", 'q', 100));
        $this->assertEquals(-1, StringUtils::indexOf("aabbccdefgh", 'B'));
        $this->assertEquals(-1, StringUtils::indexOf("aabbccdefgh", 'cC'));
        $this->assertEquals(-1, StringUtils::indexOf("aabbccdefgh", 'A'));
        $this->assertEquals(-1, StringUtils::indexOf("qqwweeqqwwee", 'Q', 3));
        $this->assertEquals(-1, StringUtils::indexOf("qqwweeqqwwee", 'Q', 0));
        $this->assertEquals(-1, StringUtils::indexOf("qqwweeqqwwee", 'Q', -1));
        $this->assertEquals(0, StringUtils::indexOf(" ", " "));
        $this->assertEquals(1, StringUtils::indexOf("a b", " "));
        $this->assertEquals(2, StringUtils::indexOf("aabbccdefgh", 'b'));
        $this->assertEquals(4, StringUtils::indexOf("aabbccdefgh", 'cc'));
        $this->assertEquals(0, StringUtils::indexOf("aabbccdefgh", 'a'));
        $this->assertEquals(6, StringUtils::indexOf("qqwweeqqwwee", 'q', 3));
        $this->assertEquals(0, StringUtils::indexOf("qqwweeqqwwee", 'q', 0));
        $this->assertEquals(0, StringUtils::indexOf("qqwweeqqwwee", 'q', -1));
    }
    
    public function testLastIndexOf() {
        $this->assertEquals(-1, StringUtils::lastIndexOf(NULL, NULL));
        $this->assertEquals(-1, StringUtils::lastIndexOf("", ""));
        $this->assertEquals(-1, StringUtils::lastIndexOf("aabbccdefgh", NULL));
        $this->assertEquals(-1, StringUtils::lastIndexOf("aabbccdefgh", ""));
        $this->assertEquals(-1, StringUtils::lastIndexOf(NULL, "a"));
        $this->assertEquals(-1, StringUtils::lastIndexOf("aabbccdefgh", 'ccc'));
        $this->assertEquals(-1, StringUtils::lastIndexOf("qqwweeqqwwee", 'q', 100));
        $this->assertEquals(-1, StringUtils::lastIndexOf("aabbccdefgh", 'B'));
        $this->assertEquals(-1, StringUtils::lastIndexOf("aabbccdefgh", 'cC'));
        $this->assertEquals(-1, StringUtils::lastIndexOf("aabbccdefgh", 'A'));
        $this->assertEquals(-1, StringUtils::lastIndexOf("qqwweeqqwwee", 'Q', 3));
        $this->assertEquals(-1, StringUtils::lastIndexOf("qqwweeqqwwee", 'Q', 0));
        $this->assertEquals(-1, StringUtils::lastIndexOf("qqwweeqqwwee", 'Q', -1));
        $this->assertEquals(0, StringUtils::lastIndexOf(" ", " "));
        $this->assertEquals(1, StringUtils::lastIndexOf("a b", " "));
        $this->assertEquals(3, StringUtils::lastIndexOf("aabbccdefgh", 'b'));
        $this->assertEquals(11, StringUtils::lastIndexOf("aabbccdefghcc", 'cc'));
        $this->assertEquals(1, StringUtils::lastIndexOf("aabbccdefgh", 'a'));
        $this->assertEquals(1, StringUtils::lastIndexOf("qqwweeqqwwee", 'q', 5));
        $this->assertEquals(7, StringUtils::lastIndexOf("qqwweeqqwwee", 'q', 10));
        $this->assertEquals(7, StringUtils::lastIndexOf("qqwweeqqwwee", 'q', -1));
    }
    
    public function testIndexOfIgnoreCase() {
        $this->assertEquals(-1, StringUtils::indexOfIgnoreCase(NULL, NULL));
        $this->assertEquals(-1, StringUtils::indexOfIgnoreCase("", ""));
        $this->assertEquals(-1, StringUtils::indexOfIgnoreCase("aabbccdefgh", NULL));
        $this->assertEquals(-1, StringUtils::indexOfIgnoreCase("aabbccdefgh", ""));
        $this->assertEquals(-1, StringUtils::indexOfIgnoreCase(NULL, "a"));
        $this->assertEquals(-1, StringUtils::indexOfIgnoreCase("aabbccdefgh", 'ccc'));
        $this->assertEquals(-1, StringUtils::indexOfIgnoreCase("qqwweeqqwwee", 'q', 100));
        $this->assertEquals(0, StringUtils::indexOfIgnoreCase(" ", " "));
        $this->assertEquals(1, StringUtils::indexOfIgnoreCase("a b", " "));
        $this->assertEquals(2, StringUtils::indexOfIgnoreCase("aabbccdefgh", 'b'));
        $this->assertEquals(4, StringUtils::indexOfIgnoreCase("aabbccdefgh", 'cc'));
        $this->assertEquals(0, StringUtils::indexOfIgnoreCase("aabbccdefgh", 'a'));
        $this->assertEquals(6, StringUtils::indexOfIgnoreCase("qqwweeqqwwee", 'q', 3));
        $this->assertEquals(0, StringUtils::indexOfIgnoreCase("qqwweeqqwwee", 'q', 0));
        $this->assertEquals(0, StringUtils::indexOfIgnoreCase("qqwweeqqwwee", 'q', -1));
        $this->assertEquals(2, StringUtils::indexOfIgnoreCase("aabbccdefgh", 'B'));
        $this->assertEquals(4, StringUtils::indexOfIgnoreCase("aabbccdefgh", 'cC'));
        $this->assertEquals(0, StringUtils::indexOfIgnoreCase("aabbccdefgh", 'A'));
        $this->assertEquals(6, StringUtils::indexOfIgnoreCase("qqwweeqqwwee", 'Q', 3));
        $this->assertEquals(0, StringUtils::indexOfIgnoreCase("qqwweeqqwwee", 'Q', 0));
        $this->assertEquals(0, StringUtils::indexOfIgnoreCase("qqwweeqqwwee", 'Q', -1));
    }
    
    public function testLastIndexOfIgnoreCase() {
        $this->assertEquals(-1, StringUtils::lastIndexOfIgnoreCase(NULL, NULL));
        $this->assertEquals(-1, StringUtils::lastIndexOfIgnoreCase("", ""));
        $this->assertEquals(-1, StringUtils::lastIndexOfIgnoreCase("aabbccdefgh", NULL));
        $this->assertEquals(-1, StringUtils::lastIndexOfIgnoreCase("aabbccdefgh", ""));
        $this->assertEquals(-1, StringUtils::lastIndexOfIgnoreCase(NULL, "a"));
        $this->assertEquals(-1, StringUtils::lastIndexOfIgnoreCase("aabbccdefgh", 'ccc'));
        $this->assertEquals(-1, StringUtils::lastIndexOfIgnoreCase("qqwweeqqwwee", 'q', 100));
        $this->assertEquals(0, StringUtils::lastIndexOfIgnoreCase(" ", " "));
        $this->assertEquals(1, StringUtils::lastIndexOfIgnoreCase("a b", " "));
        $this->assertEquals(3, StringUtils::lastIndexOfIgnoreCase("aabbccdefgh", 'b'));
        $this->assertEquals(11, StringUtils::lastIndexOfIgnoreCase("aabbccdefghcc", 'cc'));
        $this->assertEquals(1, StringUtils::lastIndexOfIgnoreCase("aabbccdefgh", 'a'));
        $this->assertEquals(1, StringUtils::lastIndexOfIgnoreCase("qqwweeqqwwee", 'q', 5));
        $this->assertEquals(7, StringUtils::lastIndexOfIgnoreCase("qqwweeqqwwee", 'q', 10));
        $this->assertEquals(7, StringUtils::lastIndexOfIgnoreCase("qqwweeqqwwee", 'q', -1));
        $this->assertEquals(3, StringUtils::lastIndexOfIgnoreCase("aabbccdefgh", 'B'));
        $this->assertEquals(11, StringUtils::lastIndexOfIgnoreCase("aabbccdefghcc", 'cC'));
        $this->assertEquals(1, StringUtils::lastIndexOfIgnoreCase("aabbccdefgh", 'A'));
        $this->assertEquals(1, StringUtils::lastIndexOfIgnoreCase("qqwweeqqwwee", 'Q', 3));
        $this->assertEquals(7, StringUtils::lastIndexOfIgnoreCase("qqwweeqqwwee", 'Q', 0));
        $this->assertEquals(7, StringUtils::lastIndexOfIgnoreCase("qqwweeqqwwee", 'Q', -1));
    }
    
    public function testContains() {
        $this->assertFalse(StringUtils::contains(NULL, NULL));
        $this->assertFalse(StringUtils::contains("", NULL));
        $this->assertFalse(StringUtils::contains("", ""));
        $this->assertFalse(StringUtils::contains(NULL, ""));
        $this->assertFalse(StringUtils::contains("abc", "z"));
        $this->assertFalse(StringUtils::contains("abc", "A"));
        $this->assertTrue(StringUtils::contains("abc", "a"));
    }
    
    public function testContainsIgnoreCase() {
        $this->assertFalse(StringUtils::containsIgnoreCase(NULL, NULL));
        $this->assertFalse(StringUtils::containsIgnoreCase("", NULL));
        $this->assertFalse(StringUtils::containsIgnoreCase("", ""));
        $this->assertFalse(StringUtils::containsIgnoreCase(NULL, ""));
        $this->assertFalse(StringUtils::containsIgnoreCase("abc", "z"));
        $this->assertTrue(StringUtils::containsIgnoreCase("abc", "A"));
        $this->assertTrue(StringUtils::containsIgnoreCase("abc", "a"));
    }
    
    public function testContainsWhitespace() {
        $this->assertFalse(StringUtils::containsWhitespace(NULL));
        $this->assertFalse(StringUtils::containsWhitespace(""));
        $this->assertFalse(StringUtils::containsWhitespace(NULL));
        $this->assertFalse(StringUtils::containsWhitespace("abc"));
        $this->assertTrue(StringUtils::containsWhitespace("ab c"));
        $this->assertTrue(StringUtils::containsWhitespace("      abc"));
        $this->assertTrue(StringUtils::containsWhitespace("abc       "));
        $this->assertTrue(StringUtils::containsWhitespace("ab    c"));
    }
    
    public function testIndexOfAny() {
        $this->assertEquals(-1, StringUtils::indexOfAny(null, null));
        $this->assertEquals(-1, StringUtils::indexOfAny("", null));
        $this->assertEquals(-1, StringUtils::indexOfAny(null, ""));
        $this->assertEquals(-1, StringUtils::indexOfAny("", ""));
        $this->assertEquals(-1, StringUtils::indexOfAny("aabbccaa", "z"));
        $this->assertEquals(-1, StringUtils::indexOfAny("aabbccaa", "z", "x"));
        $this->assertEquals(0, StringUtils::indexOfAny("aabbccaa", "a"));
        $this->assertEquals(0, StringUtils::indexOfAny("aabbccaa", "z", "a"));
        $this->assertEquals(0, StringUtils::indexOfAny("aabbccaa", "a", "c"));
        $this->assertEquals(4, StringUtils::indexOfAny("aabbccaa", "e", "c"));
        $this->assertEquals(2, StringUtils::indexOfAny("abcdabcd", "e", "c"));
    }
}
