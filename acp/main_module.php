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

		// Add Language
		$user->add_lang_ext('restlessrancor/attachmentshields', 'common');
		
		// ACP/Style
		$this->tpl_name = 'acp_ashields_body';
		
		// Page Title
		$this->page_title = $user->lang('ASHIELDS_TITLE');
		
		// Form
		$form_name = 'attachmentshields_enable';
		add_form_key($form_name);
		
		$this->config = $config;
		$this->request = $request;

		if ($request->is_set_post('submit'))
		{
			if (!check_form_key($form_name))
			{
				trigger_error('FORM_INVALID', E_USER_WARNING);
			}

			$this->config->set('ashields_enable', $this->request->variable('ashields_enable', 0));
			$this->config->set('ashields_version_enable', $this->request->variable('ashields_version_enable', 0));
			$this->config->set('ashields_file_color', trim($this->request->variable('ashields_file_color', $this->config['ashields_file_color'])));
			$this->config->set('ashields_file_style', trim($this->request->variable('ashields_file_style', $this->config['ashields_file_style'])));
			$this->config->set('ashields_image_color', trim($this->request->variable('ashields_image_color', $this->config['ashields_image_color'])));
			$this->config->set('ashields_image_style', trim($this->request->variable('ashields_image_style', $this->config['ashields_image_style'])));
			$this->config->set('ashields_flash_color', trim($this->request->variable('ashields_flash_color', $this->config['ashields_flash_color'])));
			$this->config->set('ashields_flash_style', trim($this->request->variable('ashields_flash_style', $this->config['ashields_flash_style'])));
			
			// Add to admin log
			$phpbb_log->add('admin', $user->data['user_id'], $user->ip, 'ASHIELDS_UPDATED');
			
			trigger_error($user->lang('ASHIELDS_SAVED') . adm_back_link($this->u_action));
		}

		// Assign to global template.
		$template->assign_vars(array(
			'ASHIELDS_ENABLE'			=> (!empty($this->config['ashields_enable'])) ? true : false,
			'ASHIELDS_VERSION_ENABLE'	=> (!empty($this->config['ashields_version_enable'])) ? true : false,
			'ASHIELDS_FILE_COLOR'		=> $this->config['ashields_file_color'],
			'ASHIELDS_IMAGE_COLOR'		=> $this->config['ashields_image_color'],
			'ASHIELDS_FLASH_COLOR'		=> $this->config['ashields_flash_color'],
			'U_ACTION'					=> $this->u_action,
		));
		
		// Assign each style value to the template
		// File shields
		if ($this->config['ashields_file_style'] == 0)
		{
			$template->assign_vars(array(
			'ASHIELDS_FILE_STYLE'	=> '?LongCache=true&style=flat',
			));
		}
		if ($this->config['ashields_file_style'] == 1)
		{
			$template->assign_vars(array(
			'ASHIELDS_FILE_STYLE'	=> '?LongCache=true&style=plastic',
			));
		}		
		if ($this->config['ashields_file_style'] == 2)
		{
			$template->assign_vars(array(
			'ASHIELDS_FILE_STYLE'	=> '?LongCache=true&style=flat-square',
			));
		}		
		if ($this->config['ashields_file_style'] == 3)
		{
			$template->assign_vars(array(
			'ASHIELDS_FILE_STYLE'	=> '?LongCache=true&style=for-the-badge',
			));
		}		
		if ($this->config['ashields_file_style'] == 4)
		{
			$template->assign_vars(array(
			'ASHIELDS_FILE_STYLE'	=> '?LongCache=true&style=popout',
			));
		}		
		if ($this->config['ashields_file_style'] == 5)
		{
			$template->assign_vars(array(
			'ASHIELDS_FILE_STYLE'	=> '?LongCache=true&style=popout-square',
			));
		}		
		if ($this->config['ashields_file_style'] == 6)
		{
			$template->assign_vars(array(
			'ASHIELDS_FILE_STYLE'	=> '?LongCache=true&style=social',
			));
		}
		// Image shields
		if ($this->config['ashields_image_style'] == 0)
		{
			$template->assign_vars(array(
			'ASHIELDS_IMAGE_STYLE'	=> '?LongCache=true&style=flat',
			));
		}
		if ($this->config['ashields_image_style'] == 1)
		{
			$template->assign_vars(array(
			'ASHIELDS_IMAGE_STYLE'	=> '?LongCache=true&style=plastic',
			));
		}		
		if ($this->config['ashields_image_style'] == 2)
		{
			$template->assign_vars(array(
			'ASHIELDS_IMAGE_STYLE'	=> '?LongCache=true&style=flat-square',
			));
		}		
		if ($this->config['ashields_image_style'] == 3)
		{
			$template->assign_vars(array(
			'ASHIELDS_IMAGE_STYLE'	=> '?LongCache=true&style=for-the-badge',
			));
		}		
		if ($this->config['ashields_image_style'] == 4)
		{
			$template->assign_vars(array(
			'ASHIELDS_IMAGE_STYLE'	=> '?LongCache=true&style=popout',
			));
		}		
		if ($this->config['ashields_image_style'] == 5)
		{
			$template->assign_vars(array(
			'ASHIELDS_IMAGE_STYLE'	=> '?LongCache=true&style=popout-square',
			));
		}		
		if ($this->config['ashields_image_style'] == 6)
		{
			$template->assign_vars(array(
			'ASHIELDS_IMAGE_STYLE'	=> '?LongCache=true&style=social',
			));
		}
		// Flash shields
		if ($this->config['ashields_flash_style'] == 0)
		{
			$template->assign_vars(array(
			'ASHIELDS_FLASH_STYLE'	=> '?LongCache=true&style=flat',
			));
		}
		if ($this->config['ashields_flash_style'] == 1)
		{
			$template->assign_vars(array(
			'ASHIELDS_FLASH_STYLE'	=> '?LongCache=true&style=plastic',
			));
		}		
		if ($this->config['ashields_flash_style'] == 2)
		{
			$template->assign_vars(array(
			'ASHIELDS_FLASH_STYLE'	=> '?LongCache=true&style=flat-square',
			));
		}		
		if ($this->config['ashields_flash_style'] == 3)
		{
			$template->assign_vars(array(
			'ASHIELDS_FLASH_STYLE'	=> '?LongCache=true&style=for-the-badge',
			));
		}		
		if ($this->config['ashields_flash_style'] == 4)
		{
			$template->assign_vars(array(
			'ASHIELDS_FLASH_STYLE'	=> '?LongCache=true&style=popout',
			));
		}		
		if ($this->config['ashields_flash_style'] == 5)
		{
			$template->assign_vars(array(
			'ASHIELDS_FLASH_STYLE'	=> '?LongCache=true&style=popout-square',
			));
		}		
		if ($this->config['ashields_flash_style'] == 6)
		{
			$template->assign_vars(array(
			'ASHIELDS_FLASH_STYLE'	=> '?LongCache=true&style=social',
			));
		}
	}
}
