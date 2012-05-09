<?php
/**
 * An example JWeb application built on the Joomla Platform.
 *
 * To run this example, copy or soft-link this folder to your web server tree.
 *
 * @package    Joomla.Examples
 * @copyright  Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

// We are a valid Joomla entry point.

/**
* An example JContent application class.
*
* This is an example of using JContent to render a simple page.
*
* @package  Joomla.Examples
* @since    11.3
*/
class SimpleApplicationWeb  extends JApplicationWeb
{
	/**
	 * Overrides the parent doExecute method to run the web application.
	 *
	 * This method should include your custom code that runs the application.
	 *
	 * @return  void
	 *
	 * @since   11.3
	 */
	protected function doExecute()
	{
		$this->dbo = JFactory::getDbo();
		$this->session = JFactory::getSession();
		JFactory::$application = $this;
		try
		{
			$task = $this->input->get('task','view','word');

			$controllerName = 'SimpleController'. ucfirst($task);
			$controller = new $controllerName($this->input, $this);

			// Start an output buffer.
			ob_start();
			$controller->execute();
			$output = ob_get_clean();

			// Push the output into the document buffer and add the theme.
			$themepath = JPATH_THEMES . '/' . $this->get('theme').'/index.php';
			include_once ($themepath);
		}
		catch (RuntimeException $e)
		{
			// handle error
		}

	}
	/**
	 * Method to get the template name. This is needed for compatability with JApplication.
	 *
	 * @return  string  The theme name.
	 *
	 * @since   12.1
	 */
	public function getTemplate()
	{
		return $this->get('theme');
	}
}

// Instantiate the application object, passing the class name to JApplicationWeb::getInstance
// and use chaining to execute the application.
JApplicationWeb::getInstance('Simple')->execute();

