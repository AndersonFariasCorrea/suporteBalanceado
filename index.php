<?php
/**
 * @AndersonFariasCorrea
 * @param String $string string to verify if it follows the pattern (){}[], [{()}](){}, ...
 * @return bolean true if it follows the pattern
 * @return bolean false if it does not follow the pattern
 * */
function validBracketsString(String $string){
    // Verify if first level follows the pattern
    $validStringPatter = "/^(?:\(\)|\{\}|\[\]|[\(\)\[\]\{\}])*(?:\(\)|\{\}|\[\]|[\(\)\[\]\{\}])*\s*$/";
    if(preg_match($validStringPatter, $string)){
        // Verify if only the allowed characters are in the string
        // by verifying if there's anything different than the allowed
        if(preg_match_all("/[^{}\[\]\(\)]/", $string)){
            return false;
        }
        if(
            substr_count($string, "(") != substr_count($string, ")") ||
            substr_count($string, "(") != substr_count($string, "}") ||
            substr_count($string, "[") != substr_count($string, "]")
        ){
            return false;
        }
        // If it follows the pattern
       return true;
    }
    // If it doesn't follow the pattern
    return false;
}
var_dump(validBracketsString('(){}[]'));
var_dump(validBracketsString('[{()}](){}'));
var_dump(validBracketsString('[{()}](){}@'));
var_dump(validBracketsString('[{()}](){'));
var_dump(validBracketsString('((){}[]){}[[{}](){a}]'));