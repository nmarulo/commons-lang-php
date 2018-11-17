<?php

namespace SoftN\Commons\Lang;

/**
 * Class CharUtils
 * @author Nicolás Marulanda P.
 */
class CharUtils {
    
    //http://www.asciitable.com/
    const ASCII_CODE_SPACE = 32;
    
    const EMPTY            = '';
    
    public static function whitespace(): string {
        return chr(self::ASCII_CODE_SPACE);
    }
    
}
