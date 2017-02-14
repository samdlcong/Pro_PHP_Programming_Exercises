<?php
$finfo = new SplFileInfo('../Chapter1/qbf.txt');
print "Basename:".$finfo->getBasename()."\n";
print "Change Time:".strftime("%m/%d/%Y %T",$finfo->getCTime())."\n";
print "Owner UID:".$finfo->getOwner()."\n";
print "Size:".$finfo->isDir()?"NO":"Yes";
print "\n";