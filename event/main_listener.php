<?php
/**
 *
 * Attachment Shields. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, Restless Rancor, https://www.restlessrancor.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace restlessrancor\attachmentshields\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class main_listener implements EventSubscriberInterface
{
	protected $user;
    protected $template;
	protected $language;
	protected $config;
	
    public function __construct(
		\phpbb\user $user, 
		\phpbb\template\twig\twig $template, 
		\phpbb\language\language $language,
		\phpbb\config\config $config)
    {
        $this->user = $user;
        $this->template = $template;
		$this->language = $language;
		$this->config = $config;
    }

    public static function getSubscribedEvents()
    {
        return array(
            'core.viewtopic_post_rowset_data' => 'add_language',
        );
    }

	public function add_language()
	{
		$this->language->add_lang('common', 'restlessrancor/attachmentshields');
		$this->template->assign_vars(array(
		'S_ASHIELDS_ENABLE'				=> $this->config['ashields_enable'] ? true : false,
		'S_ASHIELDS_VERSION_ENABLE'		=> $this->config['ashields_version_enable'] ? true : false,
		'S_ASHIELDS_FILE_COLOR'			=> $this->config['ashields_file_color'],
		'S_ASHIELDS_IMAGE_COLOR'		=> $this->config['ashields_image_color'],
		'S_ASHIELDS_FLASH_COLOR'		=> $this->config['ashields_flash_color'],
		));
		// Assign each style value to the template
		// File shields
		if ($this->config['ashields_file_style'] == 0)
		{
			$this->template->assign_vars(array(
			'ASHIELDS_FILE_STYLE'	=> '?LongCache=true&style=flat',
			));
		}
		if ($this->config['ashields_file_style'] == 1)
		{
			$this->template->assign_vars(array(
			'ASHIELDS_FILE_STYLE'	=> '?LongCache=true&style=plastic',
			));
		}		
		if ($this->config['ashields_file_style'] == 2)
		{
			$this->template->assign_vars(array(
			'ASHIELDS_FILE_STYLE'	=> '?LongCache=true&style=flat-square',
			));
		}		
		if ($this->config['ashields_file_style'] == 3)
		{
			$this->template->assign_vars(array(
			'ASHIELDS_FILE_STYLE'	=> '?LongCache=true&style=for-the-badge',
			));
		}		
		if ($this->config['ashields_file_style'] == 4)
		{
			$this->template->assign_vars(array(
			'ASHIELDS_FILE_STYLE'	=> '?LongCache=true&style=popout',
			));
		}		
		if ($this->config['ashields_file_style'] == 5)
		{
			$this->template->assign_vars(array(
			'ASHIELDS_FILE_STYLE'	=> '?LongCache=true&style=popout-square',
			));
		}		
		if ($this->config['ashields_file_style'] == 6)
		{
			$this->template->assign_vars(array(
			'ASHIELDS_FILE_STYLE'	=> '?LongCache=true&style=social',
			));
		}
		// Image shields
		if ($this->config['ashields_image_style'] == 0)
		{
			$this->template->assign_vars(array(
			'ASHIELDS_IMAGE_STYLE'	=> '?LongCache=true&style=flat',
			));
		}
		if ($this->config['ashields_image_style'] == 1)
		{
			$this->template->assign_vars(array(
			'ASHIELDS_IMAGE_STYLE'	=> '?LongCache=true&style=plastic',
			));
		}		
		if ($this->config['ashields_image_style'] == 2)
		{
			$this->template->assign_vars(array(
			'ASHIELDS_IMAGE_STYLE'	=> '?LongCache=true&style=flat-square',
			));
		}		
		if ($this->config['ashields_image_style'] == 3)
		{
			$this->template->assign_vars(array(
			'ASHIELDS_IMAGE_STYLE'	=> '?LongCache=true&style=for-the-badge',
			));
		}		
		if ($this->config['ashields_image_style'] == 4)
		{
			$this->template->assign_vars(array(
			'ASHIELDS_IMAGE_STYLE'	=> '?LongCache=true&style=popout',
			));
		}		
		if ($this->config['ashields_image_style'] == 5)
		{
			$this->template->assign_vars(array(
			'ASHIELDS_IMAGE_STYLE'	=> '?LongCache=true&style=popout-square',
			));
		}		
		if ($this->config['ashields_image_style'] == 6)
		{
			$this->template->assign_vars(array(
			'ASHIELDS_IMAGE_STYLE'	=> '?LongCache=true&style=social',
			));
		}
		// Flash shields
		if ($this->config['ashields_flash_style'] == 0)
		{
			$this->template->assign_vars(array(
			'ASHIELDS_FLASH_STYLE'	=> '?LongCache=true&style=flat',
			));
		}
		if ($this->config['ashields_flash_style'] == 1)
		{
			$this->template->assign_vars(array(
			'ASHIELDS_FLASH_STYLE'	=> '?LongCache=true&style=plastic',
			));
		}		
		if ($this->config['ashields_flash_style'] == 2)
		{
			$this->template->assign_vars(array(
			'ASHIELDS_FLASH_STYLE'	=> '?LongCache=true&style=flat-square',
			));
		}		
		if ($this->config['ashields_flash_style'] == 3)
		{
			$this->template->assign_vars(array(
			'ASHIELDS_FLASH_STYLE'	=> '?LongCache=true&style=for-the-badge',
			));
		}		
		if ($this->config['ashields_flash_style'] == 4)
		{
			$this->template->assign_vars(array(
			'ASHIELDS_FLASH_STYLE'	=> '?LongCache=true&style=popout',
			));
		}		
		if ($this->config['ashields_flash_style'] == 5)
		{
			$this->template->assign_vars(array(
			'ASHIELDS_FLASH_STYLE'	=> '?LongCache=true&style=popout-square',
			));
		}		
		if ($this->config['ashields_flash_style'] == 6)
		{
			$this->template->assign_vars(array(
			'ASHIELDS_FLASH_STYLE'	=> '?LongCache=true&style=social',
			));
		}
	}
}
