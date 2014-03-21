<?php defined('SYSPATH') OR die('No direct script access.');

class Arr extends Kohana_Arr
{
	public static function kv_pair($params)
	{
		$output = array();
		foreach ($params as $k => $v)
		{
			$output[] = $k."=".$v;
		}
		return $output;
	}
}
