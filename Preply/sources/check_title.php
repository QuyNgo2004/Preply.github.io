<?php
function title_check($str_title,$key){
    $array_list = explode($key,$str_title);
    return $array_list;
    echo count($array_list);
 }
 ?>