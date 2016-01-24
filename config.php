<?php
/**
* developed by ANdersoN : Brothernation@gmail.com;
* simple directory Manager with PHP :)
* this application will move files of a directory to new directories
* i set it to my 'download' folder
*/
$ds = DIRECTORY_SEPARATOR;
$config['base_url'] = 'http://localhost/p/downloadmanager';

//the download directory
$config['directory'] = "C:{$ds}Users{$ds}ANdersoN{$ds}Downloads";

/**
* file with extension mp3, wav, flac, and ogg will moved to C:\Users\ANdersoN\Downloads\Music\
* example : file C:\Users\ANdersoN\Downloads\maroon5.mp3 will moved to => C:\Users\ANdersoN\Downloads\Music\maroon5.mp3
*/
//array('folder_name' => mixed_extension)
$config['folder'] = array(
						'Music' => array(
										'mp3', 'wav', 'flac', 'ogg'
										),
						'Video' => array(
										'wmp', 'flv', 'mkv', 'mp4', 'avi', '3gp'
										),
						'Documents' => array(
										'doc', 'docx', 'xls', 'xlsx', 'pdf', 'rtf', 'txt', 'ppt', 'pptx'
										),
						'Compressed' => array(
										'zip', '7zip', 'rar', 'gz'
										),
						'Programs' => array(
										'exe'
										),
						'Scripts' => array(
										'php', 'sql', 'py', 'html', 'htm'
										),
						'Pictures' => array(
										'jpg', 'jpeg', 'png', 'bmp'
										),
						'Pictures/gif' => array(
										'gif'
										)

					);