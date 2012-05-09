<?php
	/*
	 * My custom HTML view.
	 *
	 * @package  Examples
	 * @since    12.1
	 */
	class SimpleViewItem extends JViewHtml
	{
		/**
		 * Redefine the model so the correct type hinting is available in the layout.
		 *
		 * @var     SimpleBaseModel
		 * @since   12.1
		 */
		protected $model;
		protected function loadPaths()
		{
			$paths = new SplPriorityQueue;
			$paths->insert(__DIR__ . '/layouts', 1000);
			return $paths;
		}

		public function render()
		{
			try
			{
				$this->data = $this->model->getData();
				if (substr($this->layout, -4) != '.php')
				{
					$this->layout = $this->layout.'.php';
				};

				return parent::render();
		}

			catch (RuntimeException $e)
			{
				// Handle database error.
			}
		}

	}
