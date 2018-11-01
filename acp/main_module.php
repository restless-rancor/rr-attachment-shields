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
 * Attachment Shields ACP module.
 */
class main_module
{
	public $page_title;
	public $tpl_name;
	public $u_action;

	public function main($id, $mode)
	{
		global $config, $request, $template, $user, $phpbb_log;

		// ext language
		$user->add_lang_ext('restlessrancor/attachmentshields', 'common');
		
		// acp/style
		$this->tpl_name = 'acp_ashields_body';
		
		// Page Title
		$this->page_title = $user->lang('ASHIELDS_TITLE');
		
		// define form
		$form_name = 'ashields_enable';
		add_form_key($form_name);
		
		$this->config = $config;
		$this->request = $request;
		$this->template = $template;

		if ($request->is_set_post('submit'))
		{
			if (!check_form_key($form_name))
			{
				trigger_error('FORM_INVALID', E_USER_WARNING);
			}
			
			$this->config->set('ashields_version_enable', $this->request->variable('ashields_version_enable', 0));
			$this->config->set('ashields_file_color', trim($this->request->variable('ashields_file_color', $this->config['ashields_file_color'])));
			$this->config->set('ashields_file_style', trim($this->request->variable('ashields_file_style', $this->config['ashields_file_style'])));
			$this->config->set('ashields_file_abox_css', trim($this->request->variable('ashields_file_abox_css', $this->config['ashields_file_abox_css'])));
			$this->config->set('ashields_image_color', trim($this->request->variable('ashields_image_color', $this->config['ashields_image_color'])));
			$this->config->set('ashields_image_style', trim($this->request->variable('ashields_image_style', $this->config['ashields_image_style'])));
			$this->config->set('ashields_image_abox_css', trim($this->request->variable('ashields_image_abox_css', $this->config['ashields_image_abox_css'])));
			
			// Add to admin log
			$phpbb_log->add('admin', $user->data['user_id'], $user->ip, 'ASHIELDS_UPDATED');
			trigger_error($user->lang('ASHIELDS_SAVED') . adm_back_link($this->u_action));
		}
		
		// Define file & image styles
		$ashields_file_style = [
		0 => '?LongCache=true&style=flat',
		1 => '?LongCache=true&style=plastic',
		2 => '?LongCache=true&style=flat-square',
		3 => '?LongCache=true&style=for-the-badge',
		4 => '?LongCache=true&style=popout',
		5 => '?LongCache=true&style=popout-square',
		6 => '?LongCache=true&style=social',
		];
		$ashields_image_style = [
		0 => '?LongCache=true&style=flat',
		1 => '?LongCache=true&style=plastic',
		2 => '?LongCache=true&style=flat-square',
		3 => '?LongCache=true&style=for-the-badge',
		4 => '?LongCache=true&style=popout',
		5 => '?LongCache=true&style=popout-square',
		6 => '?LongCache=true&style=social',
		];
		
		// Assign to adm/style template
		$this->template->assign_vars(array(
			'ASHIELDS_VERSION_ENABLE'	=> $this->config['ashields_version_enable'] ? true : false,
			'ASHIELDS_FILE_COLOR'		=> $this->config['ashields_file_color'],
			'ASHIELDS_FILE_ABOX_CSS'	=> $this->config['ashields_file_abox_css'],
			'ASHIELDS_IMAGE_COLOR'		=> $this->config['ashields_image_color'],
			'ASHIELDS_IMAGE_ABOX_CSS'	=> $this->config['ashields_image_abox_css'],
			'ASHIELDS_FILE_STYLE' 		=> $ashields_file_style[$this->config['ashields_file_style']],
			'ASHIELDS_IMAGE_STYLE' 		=> $ashields_file_style[$this->config['ashields_image_style']],
			'U_ACTION'					=> $this->u_action,
		));
	}
}
