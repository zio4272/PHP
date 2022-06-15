<?php

// 특정 문자열로 시작하는지 확인
function string_starts_with($input, $value) {    
    return $value === "" ||  mb_strrpos($input, $value, -mb_strlen($input)) !== false;
}

var_dump(string_starts_with("안녕하세요.", "안녕"));
var_dump(string_starts_with("안녕하세요.", "하이"));

// 특정 문자열로 끝나는지 확인
function string_ends_with($input, $value)
{
    return $value === "" || (($temp = mb_strlen($input) - mb_strlen($value)) >= 0 && mb_strpos($input, $value, $temp) !== false);
}

var_dump(string_ends_with("안녕하세요.", "하세요."));
var_dump(string_ends_with("안녕하세요.", "하이"));

// 특정 문자열을 포함하는지 확인
function string_contains($input, $value)
{    
    return mb_strpos($input, $value) !== false;
}

var_dump(string_contains("안녕하세요.", "녕하"));
var_dump(string_contains("안녕하세요.", "하이"));

?>
