<?php
/**
* developed by ANdersoN : Brothernation@gmail.com;
* simple directory Manager with PHP :)
*/
class Theclass
{
	private $filepath = NULL;
	function __construct($filepath)
	{
		$this->filepath = $filepath;
	}
	function getName()
	{
		return basename($this->filepath);
	}
	function getExtension()
	{
		return pathinfo($this->filepath, PATHINFO_EXTENSION);
	}
	function fullPath()
	{
		return $this->filepath;
	}
}