<?php

$barang = array("Beras", "Gula", "Telur", "Tepung", "Cabai", "Sabun", "Bensin");
$nomor = array(1,2,3,4,5,6,7);
$berat = array(5,2,2,1,3,1,1);
$stok = array(100, 30, 40, 0, 50, 0, 0);
?>

<!DOCTYPE html>
<html style="background-color:#ffffff;">

<head>
    <style>
        *{
            font-family: 'Courier New', Monospace;
            color: black;
        }
    </style>
</head>

<body>
    <h1 style="Color:#000000">Warung Bapak Joy </h1>
    <table class="father" border='2' style="border-radius:0px;">
        <tr>
            <th>No.</th>
            <th>Nama Barang</th>
            <th>Berat (kg)</th>
            <th>Berat (g)</th>
            <th>Berat (mg)</th>
            <th>Berat (Liter)</th>
            <th>Stok</th>
        </tr>
        <?php for ($i=0; $i < 7; $i++) { ?>
        <?php $color;
        if ($stok[$i] == 0 ){
            $color = "style='background-color: red;'";
        }else{
                $color= "style='background-color: #ffffff;'";
            }?>
        <tr>
            <td> <?php echo $nomor[$i]; ?> </td>
            <td> <?php echo $barang[$i]; ?> </td>
            <td> <?php echo $berat[$i]; ?> </td>
            <td> <?php echo $berat[$i] * 1000; ?> </td>
            <td> <?php echo $berat[$i] * 1000000; ?> </td>
            <td> <?php if ($barang[$i] == "Tepung" || $barang [$i] == "Sabun"||"Bensin"){
                echo $berat[$i];
            }else{
                echo "-";
            } ?> 
            <td <?=$color ?>> <?php if ($stok[$i] == 0 ) {
                echo "Kosong";
            }else {
                echo $stok[$i];
            } ?>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>