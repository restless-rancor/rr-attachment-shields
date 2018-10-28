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
	'ASHIELDS_ENABLE_FAIL'		=> 'Failed to enable the extension!',
	'ASHIELDS_ENABLE_SUCCESS'	=> 'Enabled succesfully!',
	'ASHIELDS_SAVED'			=> 'Settings have been saved successfully!.',
	'ASHIELDS_UPDATED'			=> 'Updated Attachment Shields configuration.',
	
	'ASHIELDS_ENABLE'			=> 'Enable Attachment Shields',
	'ASHIELDS_ENABLE_EXPLAIN'	=> 'Globally enable the extension.',
));
