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

/* This provides a universal content information block with the common fields. */

					echo '<dl class="article-info">';
						echo '<dt class="article-info-term"><?php  echo 'JText::_('COM_CONTENT_ARTICLE_INFO'; ?></dt>';
						if ($this->data->config->show_create_date)
						{
							echo '<dd class="create">' . $this->data->created_date.'</dt>';
						}
						if ($this->data->config->show_modify_date)
						{
							echo '<dd class="modified">' .$this->data->modified_date .'</dt>';
						}
						if ($this->data->config->show_publish_date)
						{
							echo '<dd class="published">' . $this->data->publish_start_date.'</dt>';
						}
						if ($this->data->config->show_author)
						{
							echo '<dd class="author">' .  $this->data->created_user_id.'</dt>';
						}
						if ($this->data->config->show_hits)
						{
							echo '<dd class="hits">' . $this->data->hits .'</dt>';
						}
						if ($this->data->config->show_likes)
						{
							echo '<dd class="likes">' . $this->data->likes .'</dt>';
						}
					echo '</dl>';
