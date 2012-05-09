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


			echo '<h1><a href="'. $this->data->url.'">'. $this->data->title.' </a></h2>';

				echo $this->data->body;


			echo '<div class="goback"></div><a href="javascript:history.go(-1)">Go Back</a></div>';


