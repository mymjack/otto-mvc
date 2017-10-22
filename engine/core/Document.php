<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2017, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR others
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR othersWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR others DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team, Jack
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2017, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 2.0.0
 * @filesource
 */
defined('ROOTPATH') OR exit('No direct script access allowed');

/**
 * Document Class
 *
 * For easier document compoment editing. Mainly for headers.
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Document
 * @author		EllisLab Dev Team, Jack
 */
class CI_Document {
	/**
	 * List of directories to search for files and their corresponding url
	 *
	 * @var	array(string => string)
	 */
	private $paths = array(APPPATH => APPURL, APPCOMMON => APPCOMMONURL, ROOTPATH => ROOTURL );

	/**
	 * List of all the styles in header
	 *
	 * @var	array(string)
	 */
	private $styles = array();

	/**
	 * List of all the scripts in header
	 *
	 * @var	array(string)
	 */
	private $scripts = array();

	/**
	 * List of all the scripts at end of body
	 *
	 * @var	array(string)
	 */
	private $footer_scripts = array();

	/**
	 * List of all the classes appended to body
	 *
	 * @var	array(string)
	 */
	private $body_classes = array();

	/**
	 * List of all the classes appended to body
	 *
	 * @var	string
	 */
	private $title = '';

	/**
	 * List of all the classes appended to body
	 *
	 * @var	array(object)
	 */
	private $others = array();



	/**
	 * Class constructor
	 *
	 * Determines if UTF-8 support is to be enabled.
	 *
	 * @return	void
	 */
	public function __construct()
	{
		log_message('info', 'Document Class Initialized');
	}

	/**
	 * Class constructor
	 *
	 * Determines if UTF-8 support is to be enabled.
	 *
	 * @return	mixed
	 */
	private function get($name)
	{
		if (property_exists($this, $name)) {
			return $this->$name;
		}
	}

	// --------------------------------------------------------------------


	/**
	 * Add a style
	 * @param  string $css     Path to css file
	 * @return boolean
	 */
	public function add_style($css) {

		// Is remote css file?
		if (filter_var($css, FILTER_VALIDATE_URL)) 
		{ 
			array_push($this->styles, $css);
			return true;
		}

		if (!preg_match('/\.css$/i', $css))
		{
			$css = $css.'.css';
		}

		foreach ($this->paths as $path => $url)
		{
			if (file_exists($path.$css)) {
				array_push($this->styles, $url.'/'.$css);
				return true;
			}
			else if (file_exists($path.'views'.DIRECTORY_SEPARATOR.$css)) {
				array_push($this->styles, $url.'views/'.$css);
				return true;
			}
		}
		return false;
	}


	/**
	 * Add a script
	 * @param  string $script     Path to script file
	 * @return boolean
	 */
	public function add_script($script) {

		// Is remote script file?
		if (filter_var($script, FILTER_VALIDATE_URL)) 
		{ 
			array_push($this->scripts, $scirpt);
			return true;
		}

		if (!preg_match('/\.js$/i', $script))
		{
			$script = $script.'.js';
		}


		foreach ($this->paths as $path => $url)
		{
			if (file_exists($path.$script)) {
				array_push($this->scripts, $url.'/'.$script);
				return true;
			}
			else if (file_exists($path.'views'.DIRECTORY_SEPARATOR.$script)) {
				array_push($this->scripts, $url.'views/'.$script);
				return true;
			}
		}
		return false;
	}


	/**
	 * Add a footer script
	 * @param  string $script     Path to script file
	 * @return boolean
	 */
	public function add_footer_script($script) {

		// Is remote script file?
		if (filter_var($script, FILTER_VALIDATE_URL)) 
		{ 
			array_push($this->footer_scripts, $scirpt);
			return true;
		}

		if (!preg_match('/\.js$/i', $script))
		{
			$script = $script.'.js';
		}

		foreach ($this->paths as $path => $url)
		{
			if (file_exists($path.$script)) {
				array_push($this->footer_scripts, $url.'/'.$script);
				return true;
			}
			else if (file_exists($path.'views'.DIRECTORY_SEPARATOR.$script)) {
				array_push($this->footer_scripts, $url.'views/'.$script);
				return true;
			}
		}
		return false;
	}


	/**
	 * Add a class to body tag
	 * @param  string $class     Class name to add
	 * @return boolean
	 */
	public function add_body_class($class) {
		array_push($this->body_classes, $class);
		return true;
	}


	/**
	 * Set the page title
	 * @param  string $name     Title to set
	 * @return boolean
	 */
	public function set_title($name) {
		$this->title = $name;
		return true;
	}



	/**
	 * Add additional head element
	 * @param  string $tag_name                   element tag name
	 * @param  array(string=>string) $attributes  attribute=>value pairs
	 * @param  string $html                       element innerHTML
	 * @return boolean
	 */
	public function add_head_element($tag_name, $attributes, $html) {

		$element = new stdClass();
		$element->tag_name = $tag_name;
		$element->attributes = $attributes;
		$element->html = $html;

		array_push($this->others, $element);
		return true;
	}



	/**
	 * Output the head styles and scripts as a string
	 * @param  boolean $close_head     Whether the head tag should be closed, default true
	 * @return string
	 */
	public function render_head($close_head=true) {
		$output = '<head>'.PHP_EOL;
		$output.= '    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />';
	    $output.= '    <meta charset="utf-8" />';
		$output.= '    <meta name="viewport" content="width=device-width, initial-scale=1.0">'.PHP_EOL;

		$output.= '    <title>'.$this->title.'</title>'.PHP_EOL;

		foreach ($this->styles as $style) 
		{
			$output .= '    <link rel="stylesheet" type="text/css" href="'.$style.'">'.PHP_EOL;
		}
		foreach ($this->scripts as $script) 
		{
			$output .= '    <script src="'.$script.'"></script>'.PHP_EOL;
		}
		foreach ($this->others as $other) 
		{
			$output .= '    <'.$other->tag_name.' ';
			foreach ($other->attributes as $attr => $val) {
				$output .= $attr.'="'.$val.'" ';
			}
			$output .= '>'.$other->html.'</'.$other->tag_name.'>'.PHP_EOL;
		}

		if ($close_head)
		{
			$output .= '</head>'.PHP_EOL;
		}
		return $output;
	}



	/**
	 * Output the footer scripts as a string
	 * @return string
	 */
	public function render_footer_scripts() {
		$output = '';
		foreach ($this->footer_scripts as $script) 
		{
			$output .= '    <script src="'.$script.'"></script>'.PHP_EOL;
		}
		return $output;
	}


	/**
	 * Output the footer scripts as a string
	 * @return string
	 */
	public function render_body_classes() {
		return ' '.implode(' ', $this->body_classes).' ';
	}

}
