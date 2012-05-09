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


/** @var $this SimpleViewItem */

			echo '<h1>' . $this->data->title . '</h1>';

			$images = json_decode($this->data->media);
			// Article information block
			// We have to be careful here because not all content types may have the parameters.
			if ((isset($this->data->config->show_create_date) && $this->data->config->show_create_date)
			|| (isset($this->data->config->show_modify_date) && $this->data->config->show_modify_date)
			|| (isset($this->data->config->show_publish_date) && $this->data->config->show_publish_date)
			|| (isset($this->data->config->show_author) && $this->data->config->show_author)
			|| (isset($this->data->config->show_hits) && $this->data->config->show_hits)
			|| (isset($this->data->config->show_likes) && $this->data->config->show_likes)
			)
				{
					include_once(dirname(__FILE__) .'/contentinformationblock.php');
				}
			if ((isset($this->data->config->show_intro) && ($this->data->config->show_intro !== false))
				|| !($this->data->fulltext))
			{
				// We'll want events later
				// echo $this->item->event->afterDisplayTitle;
				echo $this->data->body;
			}
			// We'll want events later
			//echo $this->item->event->beforeDisplayContent;
			if ($images)
			{
				echo '<div class="image-fulltext">';
				echo '<img src="'.$images->image_fulltext.'" alt="'.$images->image_fulltext_alt . '"></div><div class="clear"></div>';
				echo $images->image_fulltext_caption;
			}
			echo $this->data->fulltext;
			// We'll want events later
			//echo $this->item->event->afterDisplayContent;
			echo '<div class="goback"></div><a href="javascript:history.go(-1)">Go Back</a></div>';
// Todo; Add URLs feature and real handling of strings. Also category links.
