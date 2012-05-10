<?php
/**
 * Bootstrap file for the Joomla! Platform
 *
 * Rename this file to bootstrap.php and change to suit your environment.
 *
 * @package    Joomla.Examples
 * @copyright  Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */


// We are a valid Joomla entry point.
define('_JEXEC', 1);

// Setup the base path related constant.
define('JPATH_BASE', dirname(dirname(__FILE__)));
define('JPATH_SITE', JPATH_BASE.'/code');

define('JPATH_THEMES', JPATH_SITE.'/themes');
define('JPATH_CACHE', JPATH_SITE.'/cache');
define('JPATH_CONFIGURATION', JPATH_BASE.'/config');
// Set this path appropriately
define('JPATH_PLATFORM',dirname(dirname(dirname(__FILE__))) .'/joomla-platform/libraries' );


// Import the platform.
require_once JPATH_PLATFORM . '/import.php';
require_once JPATH_PLATFORM . '/import.legacy.php';


// Make sure that the Joomla Platform has been successfully loaded.
if (!class_exists('JLoader'))
{
	exit('Joomla Platform not loaded.');
}

// Setup the autoloader for the Joomla Pull Request Tester application classes.
JLoader::registerPrefix('Simple', __DIR__);
