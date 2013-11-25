<?php
/*
 * Smarty plugin
 * -------------------------------------------------------------
 * File:     modifier.isset.php
 * Type:     modifier
 * Name:     isset
 * Purpose:  array_key_exists analogue for smarty
 * -------------------------------------------------------------
 *
 * Sample Usage:    {if ('index'|isset:$Array)}
 *
 * QUOTES ARE NECESSARY
 */

function smarty_modifier_isset($index, $array)
{
    return array_key_exists($index, $array);
}
?>
