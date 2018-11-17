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
    
}
