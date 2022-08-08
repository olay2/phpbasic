<?php

//Array in Array 2
$products = array(
    array("ຄີບອດ","keyboard",900),
    array("ເມົ້າ","mouse",1900),
    array("ໂຕະ","table",2500),
    array("ຈໍ","Monitor",12500)
);

// for($row=0;$row<count($products);$row++){
//     print("row = ".$row."<br>");
//     for($column=0;$column<count($products[$row]);$column++){
//     print("nameProduct = ".$products[$row][$column]."<br>");
//     }
//     print("<hr>");
// }

foreach($products as $product){
    print("nameProducts".$product[0]."<br>");
    print("nameProducts".$product[1]."<br>");
    print("price".$product[2]."<br>");
    print("<hr>");
}

?>