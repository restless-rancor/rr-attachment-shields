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
	'ASHIELDS_TITLE'			=> 'Dosya Eki Kalkanları',
	'ASHIELDS_SETTINGS'			=> 'Ayarlar',
	'ASHIELDS_ENABLE_FAIL'		=> '!!! AKTİFLEME BAŞARISIZ !!!',
	'ASHIELDS_ENABLE_SUCCESS'	=> 'Başarıyla Aktifleştirildi!',
	'ASHIELDS_SAVED'			=> 'Ayarlar başarıyla kaydedildi!.',
	'ASHIELDS_UPDATED'			=> 'Dosya Eki Kalkanları yapılandırması güncellendi.',
	
	'ASHIELDS_INTERCEPTION'		=> 'Açıklama tutma',
	'ASHIELDS_INTERCEPTION_EXPLAIN'		=> 'Dosya açıklamasının bir versiyon numarası olarak tutulması için açıklama spesifik olmalı.<br /><strong>version-1.0.0</strong> şöyle görünür',
	'ASHIELDS_VERSION_ENABLE'	=> 'Dosya versiyon numaraları için açıklama tutmayı etkinleştir',
	
	'ASHIELDS_IMAGE'			=> 'Görsel Dosya Ayarları',
	'ASHIELDS_FILE'				=> 'Dosya Ayarları',

	'ASHIELDS_PREVIEW'			=> 'Önizleme:',
	'ASHIELDS_PREVIEW_EXPLAIN'	=> 'Önizlemeyi güncel olarak görmek için <em>Kabul Et</em> butonuna tıklamalı ve sayfayı yeniden yüklemelisin.',
	
	'ASHIELDS_COLOR'			=> 'Kalkan Konusu HTML Rengi',
	'ASHIELDS_CSS'				=> 'Dosya Eki CSS',
	'ASHIELDS_COLOR_EXPLAIN'	=> 'ör: <em>FF0000</em>. # hastagi kullanmayın',
	'ASHIELDS_CSS_EXPLAIN'		=> 'Kodu <strong>;</strong> simgesi ile  <strong>bitirmeyin</strong>',
	'ASHIELDS_CSS_HELP'			=> 'CSS Yardımcısı (tweak nerede gerekli ise başlamak için kopyala & yapıştırın)',
	'ASHIELDS_CSS_HELP_EXPLAIN'	=> 'border: 1px solid;border-radius: 10px; margin: 5px; padding: 20px 20px 20px; width: auto; text-transform: uppercase; text-align: center; background-color: #ffffe6',

	'ASHIELDS_STYLE'			=> 'Kalkan Stili',
	'ASHIELDS_STYLE_EXPLAIN'	=> 'Daha fazla bilgi için <a href="https://shields.io">shields.io</a> adresini ziyaret edin',
	'ASHIELDS_FLAT'				=> 'Düz',
	'ASHIELDS_PLASTIC'			=> 'Plastik',
	'ASHIELDS_FLAT_SQUARE'		=> 'Düz-Kare',
	'ASHIELDS_FOR_THE_BADGE'	=> 'Büyük Dörtgen',
	'ASHIELDS_POPOUT'			=> 'Popout',
	'ASHIELDS_POPOUT_SQUARE'	=> 'Popout-Kare',
	'ASHIELDS_SOCIAL'			=> 'Sosyal',
));
