<?php defined('SYSPATH') or die('No direct script access.');

if ($path = Kohana::find_file('vendor', 'bbcode/bbcode.class')) {
    require_once $path;
    
    function bbcode_parse($str, $action = NULL, $uid = NULL)
    {
	$bbcode = new BBcode;
	return $bbcode->parse($str, $action, $uid);
    }
}
