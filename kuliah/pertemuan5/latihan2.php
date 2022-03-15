<?php
// Pengulangan pada array 
// For / foreach
$angka = [3,2,15,02,11,7,88,1,45];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charsel="UTF-8">
        <meta http-equiv="X-UA-Compatible"content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Latihan2</titlez>
        <style>
            .kotak {
                width: 50px;
                height: 50px;
                Background-color: salmon;
                text-align: center;
                line-height: 50px;
                margin: 3px;
                float: left;
            }
            .clear{clear:both;}
          </style>
        </head>
        <body>

<?php for($i = 0;$i < count($angka);$i++){?>
  <div class="kotak"><?php echo $angka[$i]; ?></div>
<?php }?>

<div class="clear"></div>

<?php foreach($angka as $a){?>
    <div class="kotak"><?php echo $a;?></div>
<?php } ?>

<div class="clear"></div>

<?php foreach($angka as $a) :?>
    <div class="kotak"><?php echo $a;?></div>
<?php endforeach; ?>

</body>
</html>