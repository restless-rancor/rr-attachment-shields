<?php
/**
 *
 * Attachment Shields. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, Restless Rancor, https://www.restlessrancor.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace restlessrancor\attachmentshields\acp;

/**
 * Attachment Shields ACP module info.
 */
class main_info
{
	public function module()
	{
		return array(
			'filename'	=> '\restlessrancor\attachmentshields\acp\main_module',
			'title'		=> 'ASHIELDS_TITLE',
			'modes'		=> array(
				'settings'	=> array(
					'title'	=> 'ASHIELDS_SETTINGS',
					'auth'	=> 'ext_restlessrancor/attachmentshields && acl_a_board',
					'cat'	=> array('ASHIELDS_TITLE')
				),
			),
		);
	}
}
