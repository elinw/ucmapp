<?php
	/**
	 * My custom base model.
	 *
	 * @package  Examples
	 *
	 * @since   12.1
	 */
class SimpleModelItem extends JModelBase
{
	/**
	 * Get the content count.
	 *
	 * @return  integer
	 *
	 * @since   12.1
	 * @throws  RuntimeException on database error.
	 */
	public function getData()
	{
		try {
			if (file_exists(JPATH_BASE. '/view/' . $this->state->get('masterview') . '/layouts/' . strtolower($this->state->get('type')) . '.php'))
			{
				$factory  = JContentFactory::getInstance();
				$content = $factory->getContent($this->state->get('type'))->load($this->state->get('content_id'));
			}


		catch (RuntimeException $e)
		{
				echo JText::_('PAGE_NOT_FOUND');
				$content=''; return $content;
				// Decide what to do here.
		}
		return $content;
	}

}

