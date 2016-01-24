<?php
/**
* developed by ANdersoN : Brothernation@gmail.com;
* simple directory Manager with PHP :)
*/
include('config.php');

//returns the folder of the file based on it's extension
function getFolder($the_ext)
{
	GLOBAL $config; 
	foreach ($config['folder'] as $key => $val) //$key = folder_name $val = mixed_extension 
	{
		foreach ($val as $iext)
		{
			if (strtolower($the_ext) === strtolower($iext)) //check if the extension is match
			{
				return $key; //return the folder_name if extension match
			}
		}
	}
	return FALSE;//there is no match folder for the file
}
function create_dir($path)
{
	$ch = '';
	$dir_array = explode('/',$path);
	foreach ($dir_array as $dir)
	{
		if ($dir != '') $ch = $ch.$dir.'/';
		if (is_dir($dir))
		{
			chdir($dir);
		}
		else
		{
			
			if ($dir != '')
			{
				mkdir($dir,755);
				chdir($dir);
				//file_put_contents('index.php','Silent & Deadly',LOCK_EX);
			}
		}
	}
	return $ch;
	
}
