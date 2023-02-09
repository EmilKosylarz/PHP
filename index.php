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
        
        if($_POST['range'] == 0){
            echo "podaj wzrost";
        } else {
            echo "twój wzrost to: ";
            echo ($_POST['range']); 
        }
        echo '<br>';
        if(empty($_POST['number2'])){
            echo "podaj wage";
        } else {
            echo "twoja waga to: ";
            echo ($_POST['number2']); 
        }


        echo '<br>';

        $wzrost = ($_POST['range']);
        $wzrost2 =  $wzrost / 100;
        $wzrost3 = $wzrost2 * $wzrost2;
        echo $wzrost3;
        echo '<br>';
        $waga = ($_POST['number2']);
        $bmi = $waga / $wzrost3;
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
        <input type="range" name="range" id="range" min="0" max="200" value="60">
        <input type="number" name="number" id="number"><br>
        <label for="number2">Waga<label>
        <input type="number2" name="number2" id="number2" value="60"><br>
        <input type="submit" name="submit" id="submit" value="submit">
        
    </form>

    <script>
        const r1 = document.querySelector('#range');
        const n1 = document.querySelector('#number');
        const output = document.querySelector('#output');
        let personalHeight = 10;

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