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


			echo '<h1>'. $this->data->title . '</h1>';
			echo '<div class="encyclopedia_col1">';

			$image= JHtml::_('image', $this->data->media, JText::_('COM_CONTACT_IMAGE_DETAILS'), array('align' => 'middle', 'class' =>'caption', 'title'=> $this->data->address));
			echo $image;

			echo $this->data->body;
			echo '</div>';
			// Add the secondary data
			echo '<div class="encyclopedia_col2">';
				echo '<ul>';
					echo '<li>'.$this->data->misc.'</li>';
					echo '<li>'.$this->data->con_position.'</li>';
					echo '<li>'.$this->data->state.'</li>';
					echo '<li>'.$this->data->country.'</li>';
				echo '</ul>';
			echo '</div>';
			echo '<div class="clear"></div>';
			echo '<div class="encyclopedia_links"><ul>';
			echo '<li><a href="'.$this->data->config->linka.'">'.$this->data->config->linka_name.'</a>'.'</li>';
			echo '<li><a href="'.$this->data->config->linkb.'">'.$this->data->config->linkb_name.'</a>'.'</li>';
			echo '<li><a href="'.$this->data->config->linkc.'">'.$this->data->config->linkc_name.'</a>'.'</li>';
			echo '<li><a href="'.$this->data->config->linkd.'">'.$this->data->config->linkd_name.'</a>'.'</li>';}
			echo '<div class="clear"></div>';
			echo '</ul></div>';
			echo '<div class="clear"></div>';
			echo '<div class="goback"></div><a href="javascript:history.go(-1)">Go Back</a></div>';

