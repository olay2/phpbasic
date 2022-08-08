<?php

$balance = 1000;
$withdarw = 400;

echo "ເງິນໃນບັນຊີ = ".$balance."<br>";
echo "ຈຳນວນເງິນທີ່ຖອນ = ".$withdarw."<br><hr>";
if($withdarw<=$balance && $withdarw>0 ){
 echo "ສາມາດກົດໄດ້ <br>";
 $balance =   $balance - $withdarw;
echo "ຍອດຄົງເຫຼືອ= ".$balance."<br>";
}else{
    echo "ເງິນໃນບັນຊີບໍ່ພຽງພໍ<br>";
}

echo "ຄືນບັດ";


?> 