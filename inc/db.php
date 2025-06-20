<?php
global $sql;
function db_conn(){
    global $config;
    $conn = mysqli_connect($config['db']['host'],$config['db']['user'],$config['db']['password'],$config['db']['name']);
    // $connection = mysqli_connect($config['db']['host'], $config['db']['user'], $config['db']['password'], $config['db']['name']);
    if($conn){
        return $conn;
    }else{
        return false;
    }
}
function db_insert($table_name, $input_array)
{
    $conn = db_conn();
    $keys_string = '';
    $values_string = '';
    $array_length = count($input_array);
    $i = 1;
    foreach ($input_array as $key => $value) {
        $keys_string .= $key;
        $values_string .= "'$value'";
        if ($i < $array_length) {
            $keys_string .= ',';
            $values_string .= ',';
        }
        $i++;
    }
    $sql = "INSERT INTO `$table_name` ($keys_string) VALUES ($values_string)";
    $result = mysqli_query($conn,$sql);
    return $result;
}
