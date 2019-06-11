<?php
/**
 * Created by PhpStorm.
 * User: rowjat
 * Date: 3/21/2019
 * Time: 10:11 PM
 */

if (! function_exists('menu_activity')) {

    function menu_activity($arr,$result='',$extra=null){
        $results = '';
        if(in_array(url()->current(),$arr)){
            $results = $result;
        }else{
            if (null !== $extra){
                if(in_array(request()->route()->getName(),$extra)){
                    $results = $result;
                }
            }
        }
        return $results;
    }
}