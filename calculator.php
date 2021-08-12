<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php 
    function hitung(){
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $operasi = $_POST['operasi'];
        switch ($operasi) {
            case 'tambah':
                $hasil = $bil1+$bil2;
            break;
            case 'kurang':
                $hasil = $bil1-$bil2;
            break;
            case 'kali':
                $hasil = $bil1*$bil2;
            break;
            case 'bagi':
                $hasil = $bil1/$bil2;
            break;          
        }
		return $hasil;
    }
    ?>
    <div class="calculator">
        <h2 class="title">CALCULATOR</h2>
        <form method="post" action="calculator.php">           
            <input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Enter first number">
            <input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Enter second number">
            <select class="opt" name="operasi">
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="kali">x</option>
                <option value="bagi">/</option>
            </select>
            <input type="submit" name="hitung" value="Count" class="button">                                         
        </form>
		<?php if(isset($_POST['hitung'])){ ?>
            <input type="text" value="<?php echo hitung(); ?>" class="bil">
        <?php }else{ ?>
            <input type="text" value="0" class="bil">
        <?php } ?>   
    </div>
</body>
</html>