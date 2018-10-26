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
            'core.viewtopic_post_rowset_data' => 'add_language',
        );
    }

	public function add_language()
	{
		$this->language->add_lang('common', 'restlessrancor/attachmentshields');
	}
}
