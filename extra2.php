
<!DOCTYPE html>
<html>
<body>

<?php 
$n= $_GET["Skaicius"];
Class Suma{
public $n;
public $num;
public $k;
function sum_n($n,$num,$k){
    $arr[0]= $n;
    echo $n."\n";
    while ($n!=1){
    if($n%2==0){
       $n=$n/2; 
    }
    else{
        $n=$n*3+1;
    }
    ++$num;
    $arr[++$k]=$n;
    echo $n ."\n";
    }
    echo "<br>Iš viso buvo ".$num." skaičiai<br>";
    echo (max($arr))." buvo didžiausiais";
}
}
$skaic = new Suma();
$skaic -> sum_n($n,1,0);
    ?>

</body>
</html>