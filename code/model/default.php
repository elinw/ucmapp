<?php
	/**
	 * My custom base model.
	 *
	 * @package  Examples
	 *
	 * @since   12.1
	 */
class SimpleModel extends JModelBase
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
		try
		{

			return $content;
		}
		catch (RuntimeException $e)
		{
				$content = '';
			return $content;

		}

	}

}


