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

	/* This is for making on the fly lists of items.
	 * Currently the query supports type and featured selectors.
	 * It should eventually also allow created_user_id, modified_user_id and state.
	 * You can also subset on category id and extension (for categories). We need to make
	 * filtering on items from the secondary table more dynamic.
	 * Also it needs limit/pagination.
	 */


/** @var $this ContentViewHtml */

		/* Get the list details from the request
		 * This can include type, category and featured alone or in combination
		 * form: index.php?type=list&of=weblinks&category=12&featured
		 * When this is finished most of this will be in the config for each list type content item.
		 */
		//Has to get moved
		$factory  = JContentFactory::getInstance();

		try
		{

		}
		catch (RuntimeException $e)
		{
			// handle error
		}

		if ($this->data->typeof != 'article')
		{
			echo '<h1>A list of '. $this->data->typeof . '</h1>';
		}
		else
			echo '<h1>A list of '. $this->data->typeof . 's</h1>';
		echo '<dl>';
		foreach ($list as $item )
		{
		$factory  = JContentFactory::getInstance();
		$this->data = $factory->getContent($this->data->typeof)->load($item->content_id);
			if ($this->data->catid && $this->data->catid != $catid)
			{
				continue;
			}
			if ($this->data->extension && $this->data->extension != $extension)
			{
				continue;
			}
			echo '<dt>';
			if ($typeof == 'weblinks')
			{
				echo '<a href="'.$this->data->url.'">';
			}
			else
			{
				echo '<a href="index.php?type='.$typeof.'&content_id='.$this->data->content_id.'">';
			}
			echo $this->data->title ;

			echo '</a>';

			echo '</dt>';

			echo '<dd>' . $this->data->body . '</dd>';
			}
		echo '</dl>';


