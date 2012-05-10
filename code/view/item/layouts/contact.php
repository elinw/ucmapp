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

			echo '<h1><a href="'.$content->url.'">'.$content->title.' </a></h2>';

				echo $content->body);
				echo
					'<dl>');
					echo '<dt>E-mail</dt><dd>'.$content->email.'</dd>';
					echo '<dt>Position</dt><dd>'.$content->con_position.'</dd>';
					echo '<dt>Telephone</dt><dd>'.$content->teleph);one.'</dd>';
					echo '<dt>Fax</dt><dd>'.$content->fax.'</dd>';
					echo '<dt>Mobile</dt><dd>'.$content->mobile.'</dd>';
					echo '<dt>Miscellaneous</dt><dd>'.$content->misc.'</dd>';
					echo '<dt>Country</dt><dd>'.$content->country.'</dd>';
					echo '<dt>State/Province</dt><dd>'.$content->state.'</dd>';
					echo '<dt>Suburb</dt><dd>'.$content->suburb.'</dd>';
					echo '<dt>Post Code</dt><dd>'.$content->postcode.'</dd>';
					echo '<dt>Web Page</dt><dd>'.$content->webpage.'</dd>';
					echo '<dt>Category</dt><dd>'.$content->catid.'</dd>';
					echo '<dt>Meta Description</dt><dd>'.$content->metadesc.'</dd>';

					echo '</dl>';

			echo '<div class="goback"></div><a href="javascript:history.go(-1)">Go Back</a></div>';
