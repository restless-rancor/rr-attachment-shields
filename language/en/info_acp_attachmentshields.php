<?php
/**
 *
 * Attachment Shields. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, Restless Rancor, https://www.restlessrancor.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ASHIELDS_TITLE'			=> 'Attachment Shields',
	'ASHIELDS_SETTINGS'			=> 'Settings',
	'ASHIELDS_ENABLE_FAIL'		=> '!!! FAILED TO ENABLE !!!',
	'ASHIELDS_ENABLE_SUCCESS'	=> 'Enabled succesfully!',
	'ASHIELDS_SAVED'			=> 'Settings have been saved successfully!.',
	'ASHIELDS_UPDATED'			=> 'Updated Attachment Shields configuration.',
	
	'ASHIELDS_ENABLE'			=> 'Enable Attachment Shields',
	'ASHIELDS_ENABLE_EXPLAIN'	=> 'Globally enable the extension.',
	
	'ASHIELDS_COLOR'			=> 'Shield Subject HTML Color',
	'ASHIELDS_COLOR_EXPLAIN'	=> 'e.g: <em>FF0000</em>. Do not include a hashtag #',
	
	'ASHIELDS_HELP'				=> 'Version numbers info',
	'ASHIELDS_HELP_EXPLAIN'		=> 'For the file comment to be intercepted as a version number, the comment must be specific',
	'ASHIELDS_VERSION_ENABLE'	=> 'Enable comment interception for version numbers',
	
	'ASHIELDS_STYLE'			=> 'Shield Style',
	'ASHIELDS_STYLE_EXPLAIN'	=> 'More info at <a href="https://shields.io">shields.io</a>',
	'ASHIELDS_FLAT'				=> 'Flat',
	'ASHIELDS_PLASTIC'			=> 'Plastic',
	'ASHIELDS_FLAT_SQUARE'		=> 'Flat-Square',
	'ASHIELDS_FOR_THE_BADGE'	=> 'For-The-Badge',
	'ASHIELDS_POPOUT'			=> 'Popout',
	'ASHIELDS_POPOUT_SQUARE'	=> 'Popout-Square',
	'ASHIELDS_SOCIAL'			=> 'Social',

));
