<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $koneksi = mysqli_connect("localhost", "root", "", "nwind");

        $sql = "SELECT * FROM products";

        $hasil = mysqli_query($koneksi, $sql);

        var_dump($hasil)
    ?>

</body>
</html>