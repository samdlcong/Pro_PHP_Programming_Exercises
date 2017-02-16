<?php
$host = 'localhost:27017';
$dbname = 'scott';
$colname = "emp";
try{
	$conn = new Mongo($host);
	$db = $conn->selectDB($dbname);
	$coll = $conn->selecrCollection($dbname,$colname);
	$cursor = $coll->find();
	foreach($cursor as $c){
		switch($c["deptno"]){
			case 10:
				$c["dname"]="ACCOUNTTING";
				$c["loc"]="NEW YORK";
				break;
			case 20:
				$c["dname"]="RESEARCH";
				$c["loc"]="CHICAGO";
				break;
			case 30:
				$c["dname"]="SALES";
				$c["loc"]="CHICAGO";
				break;
			case 40:
				$c["dname"]="OPEARATIONS";
				$c["loc"]="BOSTON";
				break;
		}
		$c["hiredate"] = new MongoDate(strtotime($c["hiredate"]));
		$coll->update(array("_id"=>$c["_id"]),$c);
	}
}
catch(MongoException $e){
	print "Exception:\n";
	die($e->getMessage()."\n");
}