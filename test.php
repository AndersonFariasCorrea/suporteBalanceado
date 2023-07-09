<?php
$string = "((){}[]){}[]";
if(preg_match_all("/(^\((.*?)\)\{(.*?)\}\[(.*?)\])$/", $string)){
    echo "\ntrue";
}
echo $string;