<?php
class ModelIndex extends CI_Model {
	public function __construct()	{
	  // Constructor
	  echo '<p>Model loaded</p>'.PHP_EOL;
	}
	public function foo()	{
	  echo '<p>Foo() in model invoked!</p>'.PHP_EOL;
	}
}