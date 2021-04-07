<style>
    table{
        width: 400px;
        height: 300px;
        border: solid 2px black;
    }
</style>

<?php
function f1(){
    echo "<h1>Function</h1>";
}

function f2($name="Beso", $lastname="Tabatadze"){
    echo "<h1>Hello $name $lastname</h1>";
}

function f3(){
    return "Hello Function";
}

function f4($x, $y, $z){
    return 2*$x+$y-$z;  //10+2-4=8  //2*2+5-4
}

f1();
f1();
f1();
echo "<hr>";
f2("Nika", "Lashxia");
echo "<hr>";
echo f3();
echo "<hr>";
echo f4($y=2, $x=5, $z=4);


function f5($N){
    if($N==1){
        return 1;
    }
    return $N*f5($N-1);
}
echo "<hr>";
echo f5(5);  //1*2*3*4*5=120  5*f5(4)



function returnTable(){
    $table = "<table>";
        $table .= "<tr>";
            $table .= "<td>";
                $table .= rand(10, 99);
            $table .= "<td>";
        $table .= "<tr>";
    $table .= "</table>";
    return $table;
}
echo "<hr>";
echo returnTable();




