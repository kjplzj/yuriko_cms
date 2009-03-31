<?php

class Validation extends Validation_Core{

	/**
	 * Add an error to an input.
	 *
	 * @chainable
	 * @param   string  input name
	 * @param   string  unique error name
	 * @param   string  arguments to pass to lang file
	 * @return  object
	 */
	public function add_error($field, $name, $args = NULL)
	{
		$this->errors[$field] = array($name, $args);

		return $this;
	}

	/**
	 * Return the errors array.
	 *
	 * @param   boolean  load errors from a lang file
	 * @return  array
	 */
	public function errors($file = NULL)
	{
		if ($file === NULL)
		{
			return $this->errors;
		}
		else
		{

			$errors = array();
			foreach ($this->errors as $input => $error)
			{
				// Key for this input error
				$key = "$file.$input.$error[0]";

				if (($errors[$input] = Kohana::lang($key, $error[1])) === $key)
				{
					// Get the default error message
					$errors[$input] = Kohana::lang("$file.$input.default");
				}
			}

			return $errors;
		}
	}

}