<?php
//  ແບບຮັບຄ່າ
// function hello( $message ) {
//     echo "helle = ". $message ."<br><hr> ";

// }
// hello( "manythong" );
// hello( "manythong" );
// hello( "manythong" );


//ແບບສົ່ງຄ່າ
// function getAddress(){
//     return " khammmou ";
// }

// $mycity= getAddress();

// print("myAddress".$mycity);

//ແບບຮັບແລະສົ່ງ
// function getTotal($salary,$count){
//     $month = $count;
//     return $salary*$month;
// }

// $amount = 15000;
// $month = 4;

// print ("ເງິນໄດ້ = ".$amount);
// print ("<br>");
// print ("ໄລຍະເວລາເຮັດວຽກ = ".$month);
// print ("<br>");
// $total= getTotal($amount,$month);
// print ("ລາຍໄດ້ =".$total);



//function ແບບກຳນົດຄ່າເລີ່ມຕົ້ນ
// function showData($fname,$lname,$city="xanidll"){
//     print("ຊື່ = ".$fname."<br>");
//     print("ນາມສະກຸນ = ".$lname."<br>");
//     print("ເມືອງ = ".$city."<br><hr>");
// }
// showData("manythong","yabundith","khammoun");
// showData("olay","yabundith","khammoun");
// showData("olay","yabundith");


//local and global variable
$x = 100;
$y=200;

function showNumber(){
    global $x;
    print ("ຕົວແປ x".$x."<br>");
}
showNumber();
 print ("variable".$x);


?>