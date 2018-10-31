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
	
	'ASHIELDS_INTERCEPTION'		=> 'Comment interception',
	'ASHIELDS_INTERCEPTION_EXPLAIN'		=> 'For the file comment to be intercepted as a version number, the comment must be specific.<br /><strong>version-1.0.0</strong> produces',
	'ASHIELDS_VERSION_ENABLE'	=> 'Enable comment interception for file version numbers.',
	
	'ASHIELDS_IMAGE'			=> 'Image File Settings',
	'ASHIELDS_FILE'				=> 'File Settings',
	
	'ASHIELDS_PREVIEW'			=> 'Shield Preview:',
	'ASHIELDS_PREVIEW_EXPLAIN'	=> 'You must click <em>Submit</em> and reload the page for the Preview to update.',
	
	'ASHIELDS_COLOR'			=> 'Shield Subject HTML Color',
	'ASHIELDS_CSS'				=> 'Attachment CSS',
	'ASHIELDS_COLOR_EXPLAIN'	=> 'e.g: <em>FF0000</em>. Do not include a hashtag #',
	'ASHIELDS_CSS_EXPLAIN'		=> 'Do <strong>not</strong> put a trailing <strong>;</strong>',
	'ASHIELDS_CSS_HELP'			=> 'CSS Helper (copy & paste to get you started, tweak where neccesary)',
	'ASHIELDS_CSS_HELP_EXPLAIN'	=> 'border: 1px solid;border-radius: 10px; margin: 5px; padding: 20px 20px 20px; width: auto; text-transform: uppercase; text-align: center; background-color: #ffffe6',
	
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
