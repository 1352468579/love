<?php
/**
 *  extention.func.php 用户自定义函数库
 *
 * @copyright			(C) 2005-2010 PHPCMS
 * @license				http://www.phpcms.cn/license/
 * @lastmodify			2010-10-27
 */
/**
 * @param arr
 * @return array
 * @描述：打印数组棒棒哒
 *  2016-8-22
 */
function pref($arr) {
    echo "<pre>";
    print_r($arr);
}

/**
 * @param arr
 * @return array
 * @描述：打印json字符串
 *  2016-8-22
 */
function jpref($arr) {
    echo json_encode($arr);
}

/**
 * @param arr
 * @return array
 * @描述：打印数组棒棒哒
 *  2016-8-22
 */
function prep($arr) {
    echo "<pre>";
    var_dump($arr);
}

/**
 * @param arr
 * @return array
 * @描述：打印数组棒棒哒
 *  2016-8-22
 */
function cpref($arr) {
    echo "<pre>";
    if (is_array($arr)) {
        $str = json_encode($arr);
        echo("<script>console.log(" . $str . ")</script>");
    } else
        echo("<script>console.log(" . $arr . ")</script>");
}
?>