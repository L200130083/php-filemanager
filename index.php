<?php
/**
* developed by ANdersoN : Brothernation@gmail.com;
* simple directory Manager with PHP :)
*/
require('config.php');
require('theclass.php');
require('helper.php');
$download_dir = scandir($config['directory']); //scan download folder to get it's contents
foreach ($download_dir as $i)
{
	$file = new Theclass($i);
	$count = 0; //count moved items
	if ($file->getExtension() != '' AND getFolder($file->getExtension()) !== FALSE) //check if file's extension match with any folder array
	{
		echo "<hr>";
		$folder = $config['directory']; 
		$destination = $folder . DIRECTORY_SEPARATOR . getFolder($file->getExtension()). DIRECTORY_SEPARATOR .$file->getName(); //set the destination folder
		$source = $folder . DIRECTORY_SEPARATOR . $file->getName(); //souce of the file
		//file_exists($destination) OR create_dir($destination);
		if (@rename($source, $destination)) //start moving the ffile from the source to the destination
		{
			if (file_exists($source)) echo 'exists<br />';
			echo "Success!! :: {$source} has moved to {$destination}<br />";
		}
		else
		{
			echo "<font color='red'>Failed!! :: {$source} is not moved to {$destination}</font><br />";
			echo error_get_last()['message']."<br />";
		}
		$count++; //okay, a file is moved success fully or failed, just count it
	}
	else
	{
		//do cool stuff here if file is not in any folder category <$config['folder']>
		
	}
}
echo "<hr>";
if ($count === 0) echo 'we did nothing!!'; //there is no activity
else echo "i managed {$count} file(s)";

