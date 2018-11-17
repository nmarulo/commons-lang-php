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
    
}
