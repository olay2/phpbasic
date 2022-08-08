<?php

$score=86;
$grade= "";


if($score>=80){
    $grade= "A";
}
elseif($score>=70){
    $grade= "B";
}
elseif($score>=60){
    $grade="c";
}
elseif($score>=50){
    $grade="D";
}else{
    $grade="F";
}

echo "grade =".$grade;



?>