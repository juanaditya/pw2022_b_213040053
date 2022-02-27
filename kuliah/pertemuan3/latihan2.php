<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 2</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<body>
  <!--cara 1-->  
<table border="1" cellpadding="10" cellspacing="0">
    <?php
        for( $i = 1; $i <= 5; $i++ ) {
            echo "<tr>";
            for ( $j = 1; $j <= 5; $j++ ) {
                echo "<td>$i,$j</td>";
            }
            echo "</tr>";
        }
    
    ?>
    <!-- cara templating-->

    <?php for ( $i = 1; $i <= 5; $i++ ) : ?>
        <?php if( $i % 2 == 1 ) : ?>
            <tr class="warna-baris">
        <?php else : ?>
            <tr>
        <?php endif; ?>
                <?php for( $j = 1; $j <= 5; $j++ ) : ?>
                    <td><?= "$i, $j"; ?></td>
                <?php endfor; ?>    
            </tr>
        <?php endfor; ?>
</table>


</body>
</html>
