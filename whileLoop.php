<?php
$count=1;
$limit=10;


// while($count<=$limit){
//     echo "ຮອບທີ່".$count."<br>";
// $count++;
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ລາຍການອາຫານ</h1>
    <select name="" id="">
        <?php while ($count<=$limit) {?>
            <option value="<?php echo $count; ?>">ລາຍການທີ່<?php echo $count; ?></option>
            <?php 
            $count++;
        }?>
    </select>
</body>
</html>