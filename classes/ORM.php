<?php defined('SYSPATH') OR die('No direct script access.');

class ORM extends Kohana_ORM {

	protected function _initialize() {
		$class_name = get_called_class();
		$class_name = str_replace('Model_', '', $class_name);
		$class_name = str_replace('_', '.', $class_name);
		$class_name = strtolower($class_name);

		$this->_table_name = $class_name;
		parent::_initialize();
	}
}
