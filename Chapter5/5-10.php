<?php
$flags = FilesystemIterator::CURRENT_AS_PATHNAME;
$ul = new Globiterator("../Chapter1/*.php", $flags);
foreach ($ul as $file) {
	print "$file\n";
}