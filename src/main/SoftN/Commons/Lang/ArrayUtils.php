<?php
/**
 * ArrayUtils.php
 */

namespace SoftN\Commons\Lang;

/**
 * Class ArrayUtils
 * @author Nicolás Marulanda P.
 */
class ArrayUtils {
    
    public static function isEmpty(?array $array): bool {
        return count($array) == 0;
    }
    
    public static function isAllNull(?array $array, bool $recursive = FALSE): bool {
        if (ArrayUtils::isEmpty($array)) {
            return TRUE;
        }
        
        foreach ($array as $v) {
            if ((!is_null($v) && !is_array($v)) || ($recursive && is_array($v) && !self::isAllNull($v, $recursive))) {
                return FALSE;
            }
        }
        
        return TRUE;
    }
    
    public static function isAnyNull(?array $value, bool $recursive = FALSE): bool {
        if (ArrayUtils::isEmpty($value)) {
            return TRUE;
        }
        
        foreach ($value as $v) {
            if (is_null($v) || ($recursive && is_array($v) && self::isAnyNull($v, $recursive))) {
                return TRUE;
            }
        }
        
        return FALSE;
    }
    
}
