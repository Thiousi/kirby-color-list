<?php
/*
 * Color List Field for Kirby CMS
 * Copyright: macotuts.com
 * @license: http://opensource.org/licenses/MIT
 */

class ColorListField extends BaseField {
	static public $fieldname = 'colorlist';
	static public $assets = array(
		'css' => array(
			'style.css',
		)
	);

	public function input() {
		// Load template with arguments
		$html = tpl::load( __DIR__ . DS . 'template.php', $data = array(
			'field' => $this,
			'page' => $this->page()
		));
		return $html;
	}

	// Default value fallback
	public function val() {
		if($this->value() == "" && $this->default() !== "") {
			$value = $this->default();
		} elseif($this->value() == "" && $this->default() == "") {
			$value = "";
		} else {
			$value = $this->value();
		}
		return $value;
	}
}