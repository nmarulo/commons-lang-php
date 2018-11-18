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
