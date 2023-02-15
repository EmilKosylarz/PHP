<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        //print_r($_POST);
        echo "<br>";
        if(isset($_POST['radio'])){
            if($_POST['radio'] === 'k'){
                $gender = 'k';
                echo "twa płeć to: kobieta";
            } else {
                echo "twa płeć to: mężczyzna";
            };
        } else {
            echo  "nie wybrano pci";
        }
        echo "<br>";
        


        echo '<br>';
        $bmi = 1;
        $wzrost = 1;
        $wzrost = ($_POST['range']);
        $wzrost2 =  $wzrost / 100;
        $wzrost3 = $wzrost2 * $wzrost2;
        echo $wzrost3;
        echo '<br>';
        $waga = ($_POST['number2']);
        if($wzrost3 > 0) {
            $bmi = $waga / $wzrost3;
        }
        echo "twoje bmi to: ";
        echo $bmi;

        echo '<br>';
        echo '<br>';
            if($bmi >= 18.5 and $bmi <= 24.9) {
                echo "waga prawidłowa";
            } elseif($bmi < 18.5) {
                echo "niedowaga";
            } else {
                echo "nadwaga";
            };
        echo '<br>';
        echo '<br>';
       

        
       

        ?>

    <form class="form1" method="post">
        <label for="k">K<label>
        <input type="radio" name="radio", id="k" value="k">
        <label for="m">M<label>
        <input type="radio" name="radio", id="m" value="m"><br>
        <label for="range">Wzrost<label>
        <input type="range" name="range" id="range" min="0" max="200" value="100">
        <input type="number" name="number" id="number" value="100"><br>
        <label for="number2">Waga<label>
        <input type="number2" name="number2" id="number2" value="100"><br>
        <input type="submit" name="submit" id="submit" value="submit">
        
    </form>

    <script>
        const r1 = document.querySelector('#range');
        const n1 = document.querySelector('#number');
        const output = document.querySelector('#output');
        let personalHeight = 100;

        r1.addEventListener('input', (e) => getData(e));
        n1.addEventListener('input', getData);

        function getData(e) {
            personalHeight = e.target.value;
            r1.value = personalHeight;
            n1.value = personalHeight;
        }
        
    </script>
</body>
</html>