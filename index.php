<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>LOOPING</h1>

<?php

    for($a = 1; $a <=5;$a++){
        for($b = 1; $b <=$a;$b++) {
            echo "$a";
            if($b < $a) {
                echo " ";
            }
        }
        echo "<br>";
    }
?>

<h2>BILANGAN FAKTORIAL</h2>
<form method="post">
    <input type="number" name="faktorial" required>
    <button type="submit" name"hitung">Hitung Angka</button>
</form>
<?php

if (isset($_POST['hitung'])){
    $x = $_POST['faktorial'];
    echo 'hasilnya adalah',faktorial($x);
}
function faktorial($x){
    $angka = 1;
    $fktorial = 1;
    while($angka <= $x){
        $fktorial = $fktorial = $angka;
        $angka = $angka + 1;
    }
    return $fktorial;
}

?>
</body>
</html>