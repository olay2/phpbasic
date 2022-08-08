<?php
//Array ແບບດຽວ // ສ້າງດ້ວຍ Array
// $number = array(10,20,30,40,50);
// $city = array("ວຽງຈັນ","ສະຫວັນ","ທ່າແຂກ");
// $total = $number[0]+$number[1];
// print($total."<br>");
// print_r($number);
// print("<br>");
// $city[0] = "ນະຄອນຫລວງ";
// print_r($city);



// Array ແບບຈັບຄູ່ Key => value
// $room = array("A01"=>"ຫ້ອງນ້ຳ","A02"=>"ຫ້ອງນອນ","A03"=>"ຫ້ອງນັ່ງຫລີ້ນ");
// print($room["A02"]);

// //creat Array use range 
// $number = range(1,10,2);
// print_r($number);

// //forloop Array
// $number = [10,20,30,40,50,60,70,20,40,10];
// $city = ["ວຽງຈັນ","ສະຫວັນ","ທ່າແຂກ","ຊຽງຂວາງ","ສາລະວັນ","ທ່າແຂກ","ປາກເຊ","ສະຫວັນ"];

// for($index=0;$index<count($city);$index++){
//     print("ຕຳແຫນ່ງທີ່ =>".$index."=>".$city[$index]."<br>");
// }
// print_r(array_count_values($number));

// $room = ["A01"=>"ຫ້ອງນ້ຳ","A02"=>"ຫ້ອງນອນ","A03"=>"ຫ້ອງນັ່ງຫລີ້ນ","A04"=>"ຫ້ອງຄົວ","A05"=>"ຫ້ອງຮັບແຂກ","A06"=>"ຫ້ອງນອນໃຫ່ຍຄູ່"];
// $animals = ["dog"=>"ຫມາ","cat"=>"ແມວ","pig"=>"ຫມູ","rabbit"=>"ກະຕ່າຍ","taiger"=>"ເສືອ",""=>""]


// //whileloop Array
// $number = [10,20,30,40,50,60,70,20,40,10];
// $city = ["ວຽງຈັນ","ສະຫວັນ","ທ່າແຂກ","ຊຽງຂວາງ","ສາລະວັນ","ທ່າແຂກ","ປາກເຊ","ສະຫວັນ"];



// $room = ["A01"=>"ຫ້ອງນ້ຳ","A02"=>"ຫ້ອງນອນ","A03"=>"ຫ້ອງນັ່ງຫລີ້ນ","A04"=>"ຫ້ອງຄົວ","A05"=>"ຫ້ອງຮັບແຂກ","A06"=>"ຫ້ອງນອນໃຫ່ຍຄູ່"];
// $animals = ["dog"=>"ຫມາ","cat"=>"ແມວ","pig"=>"ຫມູ","rabbit"=>"ກະຕ່າຍ","taiger"=>"ເສືອ"];

//     // while($item=each($room)){
//     //     print($item["key"]."=>".$item["value"]."<br>");
//     // }
     
//     // while(list($key,$valus)=each($room)){
//     //     print("key = ".$key." valus = ".$valus."<br>");
//     // }


//foreach Array
$number = [10,20,30,40,50,60,70,20,40,10];
$city = ["ວຽງຈັນ","ສະຫວັນ","ທ່າແຂກ","ຊຽງຂວາງ","ສາລະວັນ","ທ່າແຂກ","ປາກເຊ","ສະຫວັນ"];

// foreach($number as $item){
//     print($item."<br>");
// }

$room = ["A01"=>"ຫ້ອງນ້ຳ","A02"=>"ຫ້ອງນອນ","A03"=>"ຫ້ອງນັ່ງຫລີ້ນ","A04"=>"ຫ້ອງຄົວ","A05"=>"ຫ້ອງຮັບແຂກ","A06"=>"ຫ້ອງນອນໃຫ່ຍຄູ່"];
$animals = ["dog"=>"ຫມາ","cat"=>"ແມວ","pig"=>"ຫມູ","rabbit"=>"ກະຕ່າຍ","taiger"=>"ເສືອ"];

foreach($animals as $key=>$valus){
    print($key."=>".$valus."<br>");

}

?>