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

/** @var $this ContentViewHtml */

			echo '<h1><a href="'.$this->data->url.'">'.$this->data->title.' </a></h2>';

				echo $this->data->body;
			echo
					'<dl>';
					echo '<dt>E-mail</dt><dd>'.$this->data->email.'</dd>';
					echo '<dt>Position</dt><dd>'.$this->data->con_position.'</dd>';
					echo '<dt>Telephone</dt><dd>'.$this->data->telephone.'</dd>';
					echo '<dt>Fax</dt><dd>'.$this->data->fax.'</dd>';
					echo '<dt>Mobile</dt><dd>'.$this->data->mobile.'</dd>';
					echo '<dt>Miscellaneous</dt><dd>'.$this->data->misc.'</dd>';
					echo '<dt>Country</dt><dd>'.$this->data->country.'</dd>';
					echo '<dt>State/Province</dt><dd>'.$this->data->state.'</dd>';
					echo '<dt>Suburb</dt><dd>'.$this->data->suburb.'</dd>';
					echo '<dt>Post Code</dt><dd>'.$this->data->postcode.'</dd>';
					echo '<dt>Web Page</dt><dd>'.$this->data->webpage.'</dd>';
					echo '<dt>Category</dt><dd>'.$this->data->catid.'</dd>';
					echo '<dt>Meta Description</dt><dd>'.$this->data->metadesc.'</dd>';

					echo '</dl>';

			echo '<div class="goback"></div><a href="javascript:history.go(-1)">Go Back</a></div>';

