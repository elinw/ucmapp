<?php
/**
 * Form layouts
 *
 * To run this example, copy or soft-link this folder to your web server tree.
 *
 * @package    Joomla.Examples
 * @copyright  Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

//
/**
 * Include for creation of an item
 */

		// Need ACL here $canUpdate
		try
		{var_dump($this);
			echo   '<dl>';
			echo	'<dt>' . $this->data->getLabel('title') . '</dt>';
			echo	'<dd>' . $this->data->getInput('title') . '</dd>';
			echo	'<dt>' . $this->data->getLabel('username')  . '</dt>';
			echo	'<dd>' . $this->data->getInput('username') . '</dd>';
			echo	'<dt>' . $this->data->getLabel('password') . '</dt>';
			echo	'<dd>' . $this->data->getInput('password') . '</dd>';
			echo '</dl>';
		// Then we'll run through the supplemental fields


			// Doesn't do anything yet.
		?>
					<input type="hidden" name="task" value="" />
				<div class="formelm-buttons">
			<button type="button" onclick="Joomla.submitbutton("")">
				 <?php echo JText::_("LOGIN") ?>
			</button>

			</div>
<?php
					JHtml::_( "form.token" ) ;

		}
		catch (RuntimeException $e)
		{
			// handle error

		}
