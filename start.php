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
	if (!defined('APPRELATEDPATH')) {
		define('APPRELATEDPATH', '');
	}

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
 * RELATIVE ROOT DIRECTORY NAME
 *---------------------------------------------------------------
 *
 * This variable points to your site root directory that is 
 * relative to the public_html folder (or its equivalent)
 * e.g. If your site is at public_html/abc, then:
 * $rewrite_base = 'abc';
 */
	$rewrite_base = 'otto-mvc';

/*
 *---------------------------------------------------------------
 * COMMON RESOURCE DIRECTORY NAME
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

	// Common resource folder
	$application_common = 'common';
/*
 * -------------------------------------------------------------------
 *  Now that we know the path, set the main path constants
 * -------------------------------------------------------------------
 */
	// The name of THIS file
	define('STARTSELF', pathinfo(__FILE__, PATHINFO_BASENAME));

	// Path to site root folder
	define('ROOTPATH', pathinfo(__FILE__, PATHINFO_DIRNAME).DIRECTORY_SEPARATOR);

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
		$system_path = ROOTPATH . strtr(
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

	// Path to the system directory
	define('BASEPATH', $system_path.DIRECTORY_SEPARATOR);

	// Path to the front controller (this file) directory
	if (!defined('FCPATH')) {
		define('FCPATH', dirname(__FILE__).DIRECTORY_SEPARATOR);
	}

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
	elseif (is_dir(ROOTPATH.$application_common.DIRECTORY_SEPARATOR))
	{
		$application_common = ROOTPATH.strtr(
			trim($application_common, '/\\'),
			'/\\',
			DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
		);
	}
	else
	{
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'Your application common folder path does not appear to be set correctly. Please open the following file and correct this: '.STARTSELF;
		exit(3); // EXIT_CONFIG
	}

	define('APPCOMMON', $application_common.DIRECTORY_SEPARATOR);


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
	elseif (is_dir(ROOTPATH.$application_folder.DIRECTORY_SEPARATOR))
	{
		$application_folder = ROOTPATH.strtr(
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

/*
 *---------------------------------------------------------------
 * COMMON IMAGE DIRECTORY NAME
 *---------------------------------------------------------------
 *
 * This is the path to the common image directory
 *
 * NO TRAILING SLASH!
 */
	// The path to the "images" directory
	$common_image_folder = 'images';

	if (is_dir($common_image_folder))
	{
		if (($_temp = realpath($common_image_folder)) !== FALSE)
		{
			$common_image_folder = $_temp;
		}
		else
		{
			$common_image_folder = strtr(
				rtrim($common_image_folder, '/\\'),
				'/\\',
				DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
			);
		}
	}
	elseif (is_dir(ROOTPATH.$common_image_folder.DIRECTORY_SEPARATOR))
	{
		$common_image_folder = ROOTPATH.strtr(
			trim($common_image_folder, '/\\'),
			'/\\',
			DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR
		);
	}
	else
	{
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'Your application common image folder path does not appear to be set correctly. Please open the following file and correct this: '.STARTSELF;
		exit(3); // EXIT_CONFIG
	}

	define('IMAGECOMMON', $common_image_folder.DIRECTORY_SEPARATOR);



	if ( ! isset($image_folder))
	{
		$image_folder = IMAGECOMMON;
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



	// Url equivalent to the paths
	define('ROOTURL', (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]/$rewrite_base/");
	define('APPURL', str_replace('\\', '/', str_replace(ROOTPATH, ROOTURL, APPPATH)));
	define('APPCOMMONURL', str_replace('\\', '/', str_replace(ROOTPATH, ROOTURL, APPCOMMON)));
	define('IMAGEURL', str_replace('\\', '/', str_replace(ROOTPATH, ROOTURL, IMAGEPATH)));
	define('IMAGECOMMONURL', str_replace('\\', '/', str_replace(ROOTPATH, ROOTURL, IMAGECOMMON)));



/*
 * --------------------------------------------------------------------
 * INIT THE CORE FILE
 * --------------------------------------------------------------------
 *
 * And away we go...
 */
require_once BASEPATH.'core'.DIRECTORY_SEPARATOR.'CodeIgniter.php';
