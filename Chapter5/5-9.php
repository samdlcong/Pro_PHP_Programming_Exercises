<?php

$files = FilesystemIterator::CURRENT_AS_FILEINFO | FilesystemIterator::SKIP_DOTS;
$url = new FilesystemIterator('C:\Windows\System32',$flags);
foreach ($url as $file){
	if($file->isDir()){
		print $file->getFilename()."\n";
	}
}