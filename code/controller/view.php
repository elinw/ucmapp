<?php
	/**
	 * Method to execute the controller.
	 *
	 * @return  void
	 *
	 * @since   12.1
	 * @throws  RuntimeException
	 */
class SimpleControllerView extends JControllerBase
{
	/**
	 * Overrides the parent doExecute method to run the web application.
	 *
	 * This method should include your custom code that runs the application.
	 *
	 * @return  void
	 *
	 * @since   11.3
	 */
	public function execute()
	{
		try
		{
			$config = JFactory::getConfig();

			// Storing the default in the configuration for now.
			$default = $config->get('default');
			$defaulttype = $config->get('defaulttype');
			$defaultoption = $config->get('defaultoption');
			$requestArray = $this->input->getArray(array('content_id'=>'Int' , 'type'=> 'Word' , 'of' => 'Word',
				'featured'=>'Boolean' , 'category'=>'Int', 'extension'=>'Word' , 'masterview' => 'Word' ));
			extract($requestArray);

			if (!$type && !$content_id)
			{
				$type = $defaulttype;
				$content_id = $default;
			};
			// Temporary solution
			if (empty($masterview)) {$masterview = 'item';}
			include_once(JPATH_BASE . '/view/' . $masterview .  '/' . $masterview .'.php');

			include_once(JPATH_BASE . '/model/default.php');

			$model = new SimpleModelItem;

			$modelState = $model->getState();

			$modelState->set('type', $type);
			$modelState->set('content_id', $content_id);
			$modelState->set('masterview', $masterview);

			if ($type == 'list')
			{
				$typeof = $of;
				$modelState->set('typeof', $typeof);
				$modelState->set('extension', $extension);
				$modelState->set('featured', $featured);
				$modelState->set('catid', $category);
			}

			$view = new SimpleViewItem($model);
			try{
				if (file_exists(JPATH_BASE. '/view/' . $masterview . '/layouts/' . strtolower($type) . '.php'))
				{
					$view->setLayout(strtolower($type) . '.php');
				}
			}
			catch (RuntimeException $e)
			{
				// Handle exception
			}

			$content = $model->getData();

			$output = $view->render() ;

		}
		catch (RuntimeException $e)
		{
			// Handle error
		}
	}
}

