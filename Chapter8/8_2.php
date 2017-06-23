<?php
$QRY = "select e.ename, e.job, d.dname, d.loc from emp e join dept d on(d.deptno=e.deptno)";
$ncols = 0;
$colnames = array();
try{
    $db = new mysqli("localhost", "scott","tiger", "scott");
    $res = $db->query($QRY);
    print "\n";
    if($db->errno != 0){
        throw new Exception($db->error);
    }
    //获取列号
    $ncols = $res->field_count;

    //获取列名
    while ($info = $res->fetch_field()){
        $colnames[] = strtoupper(($info->name));
    }

    //打印列的标题
    foreach ($colnames as $c) {
        print("%-12s", $c);
    }

    //打印边框
    printf("\n%s\n", str_repeat("-", 12 * $ncols));

    //打印行
    while($row = $res->fetch_row()){
        foreach(range(0, $ncols -1 ) as $i){
            print("%-12s", $row[$i]);
        }
        print "\n";
    }
}
catch(Exception $e){
    print "Exception:\n";
    die($e->getMessage(). "\n");
}