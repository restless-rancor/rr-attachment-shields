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
		'S_ASHIELDS_COLOR'				=> $this->config['ashields_color'],
		));
	}
}
