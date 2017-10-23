<?php
class ModelSidebar extends CI_Model {
	public function __construct()	{
        parent::__construct();
	    // Constructor
	}
	public function foo()	{
	  echo '<p>Foo() in model invoked!</p>'.PHP_EOL;
	}
}