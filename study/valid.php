<?php

function valid_required($input)
{
    return is_array($input) ? empty($input) === False : trim($input) !== '';
}

var_dump(valid_required(""));
var_dump(valid_required(array()));
var_dump(valid_required("php"));
var_dump(valid_required(array(1)));


function valid_number($input)
{    
    $input = strval($input);
    return (bool) preg_match('/^[\-+]?[0-9]*\.?[0-9]+$/', $input);
}

function var_dump_br($val)
{
    var_dump($val);
    echo "<br />";
}

$vals = array(1, 3, 0.14, "5", "9.7", "asd", "024", "051.3" , "1337e0"); // 1337e0 = 1259488

foreach($vals as $val){
    echo $val;  

    var_dump_br(valid_number($val));
    var_dump_br(is_numeric($val));
    echo "<hr />";
}

function valid_str_alpha_numeric($str)
{
    return ctype_alnum((string) $str);
}

$datas = array(
    1, "2", "3AB", "4-", "5하"
);

foreach ($datas as $data) {
    echo "$data : ";
    var_dump(valid_str_alpha_numeric($data));
    echo "<br />";
}

$emails = array(
    'aaa@bbb.com',
    'abc',
    '.com',
    '@.com'
);

foreach ($emails as $email) {
    echo "$email : ";
    var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));
    echo "<br />";
}

$emails = array(
    'aaa@bbb.com',
    'abc',
    '.com',
    '@.com',
    'aaa@bbb.com ds'
);

foreach ($emails as $email) {
    echo "$email : ";
    var_dump(filter_var($email, FILTER_SANITIZE_EMAIL));
    echo "<br />";
}

?>