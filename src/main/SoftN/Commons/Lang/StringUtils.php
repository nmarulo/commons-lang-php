<?php

namespace SoftN\Commons\Lang;

/**
 * Class StringUtils
 * @author Nicolás Marulanda P.
 */
class StringUtils {
    
    public static function isEmpty(?string $value): bool {
        return strlen($value) == 0;
    }
    
    public static function isNotEmpty(?string $value): bool {
        return !self::isEmpty($value);
    }
    
    public static function isAnyEmpty(?string... $value): bool {
        if (ArrayUtils::isEmpty($value)) {
            return TRUE;
        }
        
        foreach ($value as $v) {
            if (self::isEmpty($v)) {
                return TRUE;
            }
        }
        
        return FALSE;
    }
    
    public static function isNoneEmpty(?string... $value): bool {
        return !self::isAnyEmpty(...$value);
    }
    
    public static function isAllEmpty(?string... $value): bool {
        if (ArrayUtils::isEmpty($value)) {
            return TRUE;
        }
        
        foreach ($value as $v) {
            if (self::isNotEmpty($v)) {
                return FALSE;
            }
        }
        
        return TRUE;
    }
    
    /**
     * @param null|string $value
     * @param bool        $onlyCodeSpace Si es false, también se consideran espacios a
     *                                   los caracteres de tabulación, tabulación vertical,
     *                                   alimentación de línea, retorno de carro
     *                                   y alimentación de formulario.
     *
     * @return bool
     */
    public static function isBlank(?string $value, bool $onlyCodeSpace = TRUE): bool {
        if (self::isEmpty($value)) {
            return TRUE;
        }
        
        if ($onlyCodeSpace) {
            return self::isEmpty(str_replace(CharUtils::whitespace(), CharUtils::EMPTY, $value));
        }
        
        return ctype_space($value);
    }
    
    public static function isNotBlank(?string $value, bool $onlyCodeSpace = TRUE): bool {
        return !self::isBlank($value, $onlyCodeSpace);
    }
    
    public static function isAnyBlank(?string... $value): bool {
        return self::isAnyBlankBase(FALSE, ...$value);
    }
    
    public static function isAnyBlankSpace(?string... $value): bool {
        return self::isAnyBlankBase(TRUE, ...$value);
    }
    
    public static function isNoneBlank(?string... $value): bool {
        return !self::isAnyBlank(...$value);
    }
    
    public static function isNoneBlankSpace(?string... $value): bool {
        return !self::isAnyBlankSpace(...$value);
    }
    
    public static function isAllBlank(?string... $value): bool {
        return self::isAllBlankBase(FALSE, ...$value);
    }
    
    public static function isAllBlankSpace(?string... $value): bool {
        return self::isAllBlankBase(TRUE, ...$value);
    }
    
    public static function trimWhiteSpaces(?string $value): ?string {
        return trim($value, CharUtils::whitespace());
    }
    
    public static function stripStart(?string $value, ?string $chars): ?string {
        if (self::isEmpty($value)) {
            return $value;
        }
        
        $len   = strlen($value);
        $start = 0;
        
        if (is_null($chars) || CharUtils::isWhitespace($chars)) {
            self::setPositionStripStart($start, $len, function($start) use ($value) {
                return CharUtils::isWhitespace($value[$start]);
            });
        } else {
            self::setPositionStripStart($start, $len, function($start) use ($chars, $value) {
                return strpos($chars, $value[$start]) !== FALSE;
            });
        }
        
        return substr($value, $start);
    }
    
    public static function stripEnd(?string $value, ?string $chars): ?string {
        if (self::isEmpty($value)) {
            return $value;
        }
        
        return strrev(self::stripStart(strrev($value), $chars));
    }
    
    public static function strip(?string $value, ?string $chars): ?string {
        if (self::isEmpty($value)) {
            return $value;
        }
        
        return self::stripEnd(self::stripStart($value, $chars), $chars);
    }
    
    public static function stripAll(?string $chars, ?string... $values): ?array {
        if (ArrayUtils::isAllNull($values, TRUE)) {
            return NULL;
        }
        
        foreach ($values as &$v) {
            $v = self::strip($v, $chars);
        }
        
        return $values;
    }
    
    public static function stripWhitespace(?string... $values): ?array {
        return self::stripAll(NULL, ...$values);
    }
    
    public static function stripAccents(?string $value): ?string {
        if (self::isEmpty($value)) {
            return $value;
        }
        
        $result = strtr(html_entity_decode($value), CharUtils::ACCENTS);
        
        if ($result === FALSE) {
            return $value;
        }
        
        return $result;
    }
    
    public static function equals(?string $first, ?string $second): bool {
        return self::equalsBase($first, $second, function($first, $second) {
            return strcmp($first, $second) === 0;
        });
    }
    
    public static function equalsIgnoreCase(?string $first, ?string $second, bool $ignoreAccents = FALSE): bool {
        if ($ignoreAccents) {
            $first  = self::stripAccents($first);
            $second = self::stripAccents($second);
        }
        
        return self::equalsBase($first, $second, function($first, $second) {
            return strcasecmp($first, $second) === 0;
        });
    }
    
    private static function equalsBase(?string $first, ?string $second, \Closure $closure): bool {
        if ($first === $second) {
            return TRUE;
        }
        
        if (strlen($first) != strlen($second)) {
            return FALSE;
        }
        
        return $closure($first, $second);
    }
    
    private static function setPositionStripStart(int &$start, int $len, \Closure $closure): void {
        while ($start < $len && $closure($start)) {
            ++$start;
        }
    }
    
    private static function isAllBlankBase(bool $onlyCodeSpace, ?string... $value): bool {
        if (ArrayUtils::isEmpty($value)) {
            return TRUE;
        }
        
        foreach ($value as $v) {
            if (self::isNotBlank($v, $onlyCodeSpace)) {
                return FALSE;
            }
        }
        
        return TRUE;
    }
    
    private static function isAnyBlankBase(bool $onlyCodeSpace, ?string... $value): bool {
        if (ArrayUtils::isEmpty($value)) {
            return TRUE;
        }
        
        foreach ($value as $v) {
            if (self::isBlank($v, $onlyCodeSpace)) {
                return TRUE;
            }
        }
        
        return FALSE;
    }
    
}
