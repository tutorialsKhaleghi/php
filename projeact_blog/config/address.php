<?php

//config
define("BASE_URL","https://php.test/projeact_blog/");
define('ROOTPATH', __FILE__);


/**
 * go to $url in project 
 */
function redirect($url){
    header('location: '. trim(BASE_URL,"/ " )."/".trim($url,"/ "));
    exit;
}
function redirectHome($url){
    header('location: '. trim(BASE_URL,"/ " ));
    exit;
}

/**\
 * return file for projeact
 */
function asset($file) {
    return trim(BASE_URL,"/ ","/",trim($file ,"/ "));
}
/**
 * return link url project 
 */
function url($url) {
    return trim(BASE_URL,"/ ") ."/". trim($url ,"/ ");
}
/**
 * check file 
 */
function checkFile($file,$not=" "){
    if(file_exists( trim(BASE_URL,"/ ") ."/".trim($file,"/ "))){
        return trim(BASE_URL,"/ ") ."/". trim($file ,"/ ");
    }else{
        return $not;
    }
}

/**
 * debug projeact 
 */
function dd($var,$massasge=""){
    echo "<pre>";
    print_r($var);
    echo"</pre>";
    echo "vardump :<pre>";
    var_dump($var);
    echo"</pre>";
  die($massasge);
}
