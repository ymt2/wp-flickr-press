<?php
require_once(dirname(__FILE__).'/FlickrPress.php');

class FpPostEvent {
	private function __construct() {
	}

	public static function addButtons() {
		$context = __('Upload/Insert %s');
		$context .= self::_media_button(__('Add flickr media'), FlickrPress::getPluginUrl().'/img/icon-flickr.gif', FlickrPress::MEDIA_BUTTON_TYPE);
		return $context;
	}

	public static function getUploadIframeSrc($uploadIframeSrc) {
		return FlickrPress::getPluginUrl().'/'.$uploadIframeSrc;
	}

	private static function _media_button($title, $icon, $type) {
	        return "<a href='" . esc_url( get_upload_iframe_src($type) ) . "' id='add_$type' class='thickbox' title='$title'><img src='" . esc_url( $icon ) . "' alt='$title' /></a>";
	}

}

?>