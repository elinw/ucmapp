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

		//  get RSS parsed object
		$options = array();
		$options['rssUrl']		= $this->data->link;
		$options['cache_time']	= $this->data->cache_time;

		$rssDoc = JFactory::getFeedParser($this->data->link);

		if ($rssDoc == false) {
			$msg = JText::_('COM_NEWSFEEDS_ERRORS_FEED_NOT_RETRIEVED');
			return;
		}
		$lists = array();

		// channel header and link
		$newsfeed->channel['title']			= $rssDoc->get_title();
		$newsfeed->channel['link']			= $rssDoc->get_link();
		$newsfeed->channel['description']	= $rssDoc->get_description();
		$newsfeed->channel['language']		= $rssDoc->get_language();

		// channel image if exists
		$newsfeed->image['url']		= $rssDoc->get_image_url();
		$newsfeed->image['title']	= $rssDoc->get_image_title();
		$newsfeed->image['link']	= $rssDoc->get_image_link();
		$newsfeed->image['height']	= $rssDoc->get_image_height();
		$newsfeed->image['width']	= $rssDoc->get_image_width();

		// items
		$newsfeed->items = $rssDoc->get_items();

		// feed elements
		$newsfeed->items = array_slice($newsfeed->items, 0, $this->data->numarticles);

		// feed display order
		$feed_display_order = $this->data->config->feed_display_order;
		if ($feed_display_order == 'asc') {
			$newsfeed->items = array_reverse($newsfeed->items);
		}

		echo '<h1>'. $this->data->title . '</h1>';
		echo '<ol>';

		foreach ($newsfeed->items as $item)
		{
		echo '<li>';
			if (!is_null($item->get_link()))
			{
				echo '<a href="'.$item->get_link(). '" target="_blank">'
					. $item->get_title() . '</a>';
			}
			if ($this->data->config->show_item_description && $item->get_description())
				{
				echo '<div class="feed-item-description">';
				 $text = $item->get_description();
				if($this->data->confige->show_feed_image != 1)
				{
					$text = JFilterOutput::stripImages($text);
				}
				$text = JHtml::_('string.truncate', $text, $this->data->config->feed_character_count);
					echo str_replace('&apos;', "'", $text);

				echo '</div>';
			}
			echo '</li>';
		}
		echo '</ol>';

