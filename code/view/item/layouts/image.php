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

/** @var $this SimpleHtmlView */


			echo '<h1>'. $this->data->title . '</h1>';
			$images = json_decode($this->data->media);
			echo '<div class="image-fulltext">
			<img src="'. $images->image_fulltext .'" alt="'. $images->image_fulltext_alt . '"></div><div class="clear"></div>';

			echo $images->image_fulltext_caption;
			echo '<div class="goback"></div><a href="javascript:history.go(-1)">Go Back</a></div>';

