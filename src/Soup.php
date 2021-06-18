<?php

/******
 * Example
 * <?php
 * 
 * use LaravelArticle\MyPacakge\MyPackage;
 * 
 * Route::get('test-pacakge',function(){
 *   
 *    MyPacakge::hi();
 *    // output: I am your first laravel package
 * 
 * }); 
 */
namespace gregorycoleman\Soup;

class Soup
{
    public static function hi(){
        echo "Laravel Soup Package";
    }

}