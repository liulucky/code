<?php

/**
 * [smarty_modifier_option 将数组弄成一个下拉列表显示]
 * @return [type] [description]
 */
function smarty_modifier_option($arr)
{

    $str = '<select>';
    //在这里将数组，处理成下拉列表作为字符串返回
    foreach( $arr as $k =>$v ){

        $str .= '<option value="'.$k.'">'.$v.'</option>';
    }

    $str .='</select>';
    return $str;
}
