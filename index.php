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
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2017, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */

/*
 *---------------------------------------------------------------
 * APPLICATION ENVIRONMENT
 *---------------------------------------------------------------
 *
 * You can load different configurations depending on your
 * current environment. Setting the environment also influences
 * things like logging and error reporting.
 *
 * This can be set to anything, but default usage is:
 *
 *     development
 *     testing
 *     production
 *
 * NOTE: If you change these, also change the error_reporting() code below
 */
	define('ENVIRONMENT', isset($_SERVER['CI_ENV']) ? $_SERVER['CI_ENV'] : 'development');

/*
 *---------------------------------------------------------------
 * ERROR REPORTING
 *---------------------------------------------------------------
 *
 * Different environments will require different levels of error reporting.
 * By default development will show errors but testing and live will hide them.
 */
switch (ENVIRONMENT)
{
	case 'development':
		error_reporting(-1);
		ini_set('display_errors', 1);
	break;

	case 'testing':
	case 'production':
		ini_set('display_errors', 0);
		if (version_compare(PHP_VERSION, '5.3', '>='))
		{
			error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED);
		}
		else
		{
			error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_USER_NOTICE);
		}
	break;

	default:
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'The application environment is not set correctly.';
		exit(1); // EXIT_ERROR
}

/*
 *---------------------------------------------------------------
 * SYSTEM DIRECTORY NAME
 *---------------------------------------------------------------
 *
 * This variable must contain the name of your "system" directory.
 * Set the path if it is not in the same directory as this file.
 */
	$system_path = 'engine';

/*
 *---------------------------------------------------------------
 * RELATIVE ROOT DIRECTORY NAME
 *---------------------------------------------------------------
 *
 * This variable points to your site root directory that is 
 * relative to the public_html folder (or its equivalent)
 * e.g. If your site is at public_html/abc, then:
 * $rewrite_base = 'abc';
 */
	$rewrite_base = 'otto';

/*
 *---------------------------------------------------------------
 * APPLICATION DIRECTORY NAMES
 *---------------------------------------------------------------
 *
 * If you want this front controller to use a different "application"
 * directory than the default one you can set its name here. The directory
 * can also be renamed or relocated anywhere on your server. If you do,
 * use an absolute (full) server path.
 * For more info please see the user guide:
 *
 * https://codeigniter.com/user_guide/general/managing_apps.html
 *
 * NO TRAILING SLASH!
 */

	// Name of folder containing all individual applications
	$application = 'app';

	// The reserved common application. Resources in this application is shared with all others.
	$common = 'common';

	// Default application, this applications is used when request url points to site root
	$application_folder = $application.'/index';
	


	// Strip anything up to first occurance of $rewrite_base/[index.php/]
	if (($request = preg_replace('/.+?'.$rewrite_base.'\/(index.php\/)?/i', '', $_SERVER['REQUEST_URI'], 1)) != $_SERVER['REQUEST_URI']) 
	{
		// Strip the first slash and anything that follow
		$request = preg_replace('/\/.*/i', '', $request);

		// See if $request is one of the existing apps
		if (!empty($request) && $request != $common && file_exists($application.DIRECTORY_SEPARATOR.$request)) 
		{
			// If so use this app instead of index
			$application_folder = $application.DIRECTORY_SEPARATOR.$request;
			$_SERVER['REQUEST_URI'] = preg_replace('/'.$request.'\/?/i', '', $_SERVER['REQUEST_URI'], 1);
		}
	}


	$application_common = $application.DIRECTORY_SEPARATOR.$common;


/*
 *---------------------------------------------------------------
 * VIEW DIRECTORY NAME
 *---------------------------------------------------------------
 *
 * If you want to move the view directory out of the application
 * directory, set the path to it here. The directory can be renamed
 * and relocated anywhere on your server. If blank, it will default
 * to the standard location inside your application directory.
 * If you do move this, use an absolute (full) server path.
 *
 * NO TRAILING SLASH!
 */
	// $view_folder = '';


/*
 *---------------------------------------------------------------
 * IMAGE DIRECTORY NAME
 *---------------------------------------------------------------
 *
 * If you want to move the image directory out of the application
 * directory, set the path to it here. The directory can be renamed
 * and relocated anywhere on your server. If blank, it will default
 * to the standard location inside your common application directory.
 * If you do move this, use an absolute (full) server path.
 *
 * NO TRAILING SLASH!
 */
	$image_folder = '';


/*
 * --------------------------------------------------------------------
 * DEFAULT CONTROLLER
 * --------------------------------------------------------------------
 *
 * Normally you will set your default controller in the routes.php file.
 * You can, however, force a custom routing by hard-coding a
 * specific controller class/function here. For most applications, you
 * WILL NOT set your routing here, but it's an option for those
 * special instances where you might want to override the standard
 * routing in a specific front controller that shares a common CI installation.
 *
 * IMPORTANT: If you set the routing here, NO OTHER controller will be
 * callable. In essence, this preference limits your application to ONE
 * specific controller. Leave the function name blank if you need
 * to call functions dynamically via the URI.
 *
 * Un-comment the $routing array below to use this feature
 */
	// The directory name, relative to the "controllers" directory.  Leave blank
	// if your controller is not in a sub-directory within the "controllers" one
	// $routing['directory'] = '';

	// The controller class file name.  Example:  mycontroller
	// $routing['controller'] = '';

	// The controller function you wish to be called.
	// $routing['function']	= '';


/*
 * -------------------------------------------------------------------
 *  CUSTOM CONFIG VALUES
 * -------------------------------------------------------------------
 *
 * The $assign_to_config array below will be passed dynamically to the
 * config class when initialized. This allows you to set custom config
 * items or override any default config values found in the config.php file.
 * This can be handy as it permits you to share one application between
 * multiple front controller files, with each file containing different
 * config values.
 *
 * Un-comment the $assign_to_config array below to use this feature
 */
	// $assign_to_config['name_of_config_item'] = 'value of config item';



// --------------------------------------------------------------------
// END OF USER CONFIGURABLE SETTINGS.  DO NOT EDIT BELOW THIS LINE
// --------------------------------------------------------------------

/*
 * ---------------------------------------------------------------
 *  Resolve the system path for increased reliability
 * ---------------------------------------------------------------
 */

	// Set the current directory correctly for CLI requests
	if (defined('STDIN'))
	{
		chdir(dirname(__FILE__));
	}

	if (($_temp = realpath($system_path)) !== FALSE)
	{
		$system_path = $_temp.DIRECTORY_SEPARATOR;
	}
	else
	{
		// Ensure there's a trailing slash
		$system_path = strtr(
			rtrim($system_path, '/\\'),
			'/\\',
			DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
		).DIRECTORY_SEPARATOR;
	}

	// Is the system path correct?
	if ( ! is_dir($system_path))
	{
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'Your system folder path does not appear to be set correctly. Please open the following file and correct this: '.pathinfo(__FILE__, PATHINFO_BASENAME);
		exit(3); // EXIT_CONFIG
	}

/*
 * -------------------------------------------------------------------
 *  Now that we know the path, set the main path constants
 * -------------------------------------------------------------------
 */
	// The name of THIS file
	define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));

	// Path to the system directory
	define('BASEPATH', $system_path);

	// Url to site root folder
	define('BASEURL', (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]/$rewrite_base");

	// Path to the front controller (this file) directory
	define('FCPATH', dirname(__FILE__).DIRECTORY_SEPARATOR);

	// Name of the "system" directory
	define('SYSDIR', basename(BASEPATH));

	// The path to the application common files directory
	if (is_dir($application_common))
	{
		if (($_temp = realpath($application_common)) !== FALSE)
		{
			$application_common = $_temp;
		}
		else
		{
			$application_common = strtr(
				rtrim($application_common, '/\\'),
				'/\\',
				DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
			);
		}
	}
	elseif (is_dir(BASEPATH.$application_common.DIRECTORY_SEPARATOR))
	{
		$application_common = BASEPATH.strtr(
			trim($application_common, '/\\'),
			'/\\',
			DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
		);
	}
	else
	{
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'Your application common folder path does not appear to be set correctly. Please open the following file and correct this: '.SELF;
		exit(3); // EXIT_CONFIG
	}

	define('APPCOMMON', $application_common.DIRECTORY_SEPARATOR);
	define('APPCOMMONURL', str_replace('\\','/', preg_replace('~.+?'.$rewrite_base.'[\\\/](index.php[\\\/])?~i', '', APPCOMMON)));


	// The path to the individual applications directory
	if (is_dir($application_folder))
	{
		if (($_temp = realpath($application_folder)) !== FALSE)
		{
			$application_folder = $_temp;
		}
		else
		{
			$application_folder = strtr(
				rtrim($application_folder, '/\\'),
				'/\\',
				DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
			);
		}
	}
	elseif (is_dir(BASEPATH.$application_folder.DIRECTORY_SEPARATOR))
	{
		$application_folder = BASEPATH.strtr(
			trim($application_folder, '/\\'),
			'/\\',
			DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
		);
	}
	else
	{
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'Your application folder path does not appear to be set correctly. Please open the following file and correct this: '.SELF;
		exit(3); // EXIT_CONFIG
	}

	define('APPPATH', $application_folder.DIRECTORY_SEPARATOR);
	define('APPURL', str_replace('\\','/', preg_replace('~.+?'.$rewrite_base.'[\\\/](index.php[\\\/])?~i', '', APPPATH)));

	// The path to the "views" directory
	if ( (! isset($image_folder[0]) && is_dir(APPPATH.'images'.DIRECTORY_SEPARATOR)) ||
		 (! isset($image_folder[0]) && is_dir(APPCOMMON.'images'.DIRECTORY_SEPARATOR)))
	{
		$image_folder = 'images';
	}
	elseif (is_dir($image_folder))
	{
		if (($_temp = realpath($image_folder)) !== FALSE)
		{
			$image_folder = $_temp;
		}
		else
		{
			$image_folder = strtr(
				rtrim($image_folder, '/\\'),
				'/\\',
				DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
			);
		}
	}
	elseif (is_dir(APPPATH.$image_folder.DIRECTORY_SEPARATOR))
	{
		$image_folder = APPPATH.strtr(
			trim($image_folder, '/\\'),
			'/\\',
			DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
		);
	}
	else
	{
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'Your image folder path does not appear to be set correctly. Please open the following file and correct this: '.SELF;
		exit(3); // EXIT_CONFIG
	}

	define('IMAGEPATH', $image_folder.DIRECTORY_SEPARATOR);

/*
 * --------------------------------------------------------------------
 * LOAD THE BOOTSTRAP FILE
 * --------------------------------------------------------------------
 *
 * And away we go...
 */
require_once BASEPATH.'core/CodeIgniter.php';
