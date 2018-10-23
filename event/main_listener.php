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

use phpbb\language\language;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class main_listener implements EventSubscriberInterface
{
	protected $language;
	
	public function __construct(language $language)
	{
		$this->language = $language;
	}

    public static function getSubscribedEvents()
    {
        return array(
            'core.user_setup' => 'load_language_on_setup',
			'core.viewtopic_modify_post_row' => 'add_language',
        );
    }

    public function load_language_on_setup($event)
    {
        $lang_set_ext = $event['lang_set_ext'];
        $lang_set_ext[] = array(
            'ext_name' => 'restlessrancor/attachmentshields',
            'lang_set' => 'common',
        );
        $event['lang_set_ext'] = $lang_set_ext;
    }

	public function add_language()
	{
		$this->language->add_lang('common', 'restlessrancor/attachmentshields');
	}
}
