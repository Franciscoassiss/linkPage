<?php
    function __autoload($className){
        if (file_exists($_SERVER['DOCUMENT_ROOT'].'app/model/'.$className.'.php')){
            include_once($_SERVER['DOCUMENT_ROOT'].'app/model/'.$className.'.php');
        } 
        if (file_exists($_SERVER['DOCUMENT_ROOT'].'app/controller/'.$className.'.php')){
            include_once($_SERVER['DOCUMENT_ROOT'].'app/controller/'.$className.'.php');
        }
        if (file_exists($_SERVER['DOCUMENT_ROOT'].'app/view/'.$className.'.php')){
            include_once($_SERVER['DOCUMENT_ROOT'].'app/view/'.$className.'.php');
        }
    }
?>