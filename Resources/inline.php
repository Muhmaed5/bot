<?php

#Zoro
$sql = "SELECT * FROM gateway WHERE gatecmd='zr'";
    $cs = mysqli_query(mysqlcon(),$sql);
    $raw = mysqli_fetch_assoc($cs);
    $zrstatus = $raw['status'];
    $zrcomment = $raw['comment'];
    mysqli_close(mysqlcon());
    if($zrstatus == "ON"){
        $zrtick = "✅";
    }elseif($sbstatus =="OFF"){
        $zrtick = "❌";
    }
    if($zrcomment == "not"){
        $zrcomment = "No comment added";
}


# SB
$sql = "SELECT * FROM gateway WHERE gatecmd='sb'";
    $cs = mysqli_query(mysqlcon(),$sql);
    $raw = mysqli_fetch_assoc($cs);
    $sbstatus = $raw['status'];
    $sbcomment = $raw['comment'];
    mysqli_close(mysqlcon());
    if($sbstatus == "ON"){
        $sbtick = "✅";
    }elseif($sbstatus =="OFF"){
        $sbtick = "❌";
    }
    if($sbcomment == "not"){
        $sbcomment = "No comment added";
}

# PP
$sql = "SELECT * FROM gateway WHERE gatecmd='pp'";
    $cs = mysqli_query(mysqlcon(),$sql);
    $raw = mysqli_fetch_assoc($cs);
    $ppstatus = $raw['status'];
    $ppcomment = $raw['comment'];
    mysqli_close(mysqlcon());
    if($ppstatus == "ON"){
        $pptick = "✅";
    }elseif($ppstatus =="OFF"){
        $pptick = "❌";
    }
    if($ppcomment == "not"){
        $ppcomment = "No comment added";
}

#ch
$sql = "SELECT * FROM gateway WHERE gatecmd='ch'";
    $cs = mysqli_query(mysqlcon(),$sql);
    $raw = mysqli_fetch_assoc($cs);
    $chstatus = $raw['status'];
    $chcomment = $raw['comment'];

    if($chstatus == "ON"){
        $chtick = "✅";
    }elseif($chstatus =="OFF"){
        $chtick = "❌";
    }
if($chcomment == "not"){
        $chcomment = "No comment added";
}

#le
$sql = "SELECT * FROM gateway WHERE gatecmd='le'";
    $cs = mysqli_query(mysqlcon(),$sql);
    $raw = mysqli_fetch_assoc($cs);
    $lestatus = $raw['status'];
    $lecomment = $raw['comment'];

    if($lestatus == "ON"){
        $letick = "✅";
    }elseif($lestatus =="OFF"){
        $letick = "❌";
    }
if($lecomment == "not"){
        $lecomment = "No comment added";
}

// sh
    $sql = "SELECT * FROM gateway WHERE gatecmd='sh'";
        $cs = mysqli_query(mysqlcon(),$sql);
    $raw = mysqli_fetch_assoc($cs);
    $shstatus = $raw['status'];
    $shcomment = $raw['comment'];

    mysqli_close(mysqlcon());
    if($shstatus == "ON"){
        $shtick = "✅";
    }elseif($shstatus =="OFF"){
        $shtick = "❌";
    }
if($shcomment == "not"){
        $shcomment = "No comment added";
}
    # Mass


$sql = "SELECT * FROM gateway WHERE gatecmd='mass'";
        $cs = mysqli_query(mysqlcon(),$sql);
    $raw = mysqli_fetch_assoc($cs);
    $massstatus = $raw['status'];
    $masscomment = $raw['comment'];
    mysqli_close(mysqlcon());
    if($massstatus == "ON"){
        $masstick = "✅";
    }elseif($massstatus =="OFF"){
        $masstick = "❌";
    }
if($masscomment == "not"){
        $masscomment = "No comment added";
}