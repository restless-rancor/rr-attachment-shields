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
		
		// Assign to topic template
		$this->template->assign_vars(array(
			'ASHIELDS_VERSION_ENABLE'	=> $this->config['ashields_version_enable'] ? true : false,
			'ASHIELDS_FILE_COLOR'		=> $this->config['ashields_file_color'],
			'ASHIELDS_FILE_ABOX_CSS'	=> $this->config['ashields_file_abox_css'],
			'ASHIELDS_IMAGE_COLOR'		=> $this->config['ashields_image_color'],
			'ASHIELDS_IMAGE_ABOX_CSS'	=> $this->config['ashields_image_abox_css'],
			'ASHIELDS_FILE_STYLE' 		=> $ashields_file_style[$this->config['ashields_file_style']],
			'ASHIELDS_IMAGE_STYLE' 		=> $ashields_file_style[$this->config['ashields_image_style']],
		));
	
	}
}
