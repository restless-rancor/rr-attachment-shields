<?php
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'DOWNLOAD_COUNTS'		=> array(
		0	=> '0',
		1	=> '%d',
		2	=> '%d',
	),
	'VIEWED_COUNTS'		=> array(
		0	=> '0',
		1	=> '%d',
		2	=> '%d',
	),
));
