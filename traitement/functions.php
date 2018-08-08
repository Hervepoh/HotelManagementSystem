<?php
/**
 * Created by PhpStorm.
 * User: Herve epoh
 * Date: 04/08/2018
 * Time: 17:19
 */
/* human debug funcction  * */
 function debug($variabledebug){
     echo  '<pre>'.print_r($variabledebug,true).'</pre>';
 }

/*  génération d'un token aléatoire  * */
function str_random($tailletoken){
    $alphabet='0123456789qwertzuiopasdfghjkyxcvbnmABCDEFGHIJKLMNOPQRSTUVWXYZ';
    return substr(str_shuffle(str_repeat($alphabet,$tailletoken)),0,$tailletoken);
}