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
    /*
    $food = 'Pizza';
    $Food = 'Berger';
    echo "I Love First Food " . $food; 
    echo "I Love First Food " . $Food; 
    */

    $notation = 'snack_case';
    $_notation2 = 'camelCase';
    $notation3 = 'PascalCase';


    echo "1. ashisKumar ---- " . $_notation2 .'<br>';
    echo "2. ashis_kumar ---- " . $notation. '<br>'; 
    echo "3. AshisKumar ---- " . $notation3. '<br>'; 

    $age = 24;
    echo"I am a undergraduate student.My age is ".$age. "<br>";

    // Two variable Sum

    $x = 16;
    $y = 24;

    echo $x + $y. "<br>";
    print $x + $y. "<br>";
    $fastFood = 'pizza';
    echo $fastFood.'<br>';
    $details = print ('I love Pizza'.'<br>');
    echo $details.'<br>';
    $name = 'Ashis';
    $number1 = 30;
    $floatNumber = 30.5;
    $bool = true;
    $arr1 = array('apple', 'banana','jackfruit');

    var_dump($name);
    var_dump($number1);
    // echo'<br>';
    var_dump($floatNumber);
    // echo'<br>';
    var_dump($bool);
    // echo'<br>';
    var_dump($arr1);
    
    class phone {
        var $model;
        function phoneModel($number){
            global $model;
            $model = $number;
            echo 'This is '.$model. '<br>';
        }
    }
    
    $apple = new phone;
    $apple->phoneModel('iPhone 14');
    
    $realMe = new phone;
    $realMe->phoneModel('REALME 3 PRO');
    
    $samsung = new phone;
    $samsung->phoneModel('Samsung S22 Ultra Pro Max');
    
    var_dump($apple);

    
    ?>

    <!-- <?php echo 'Hello PHP'; ?>
    <?php ECHO "Hello PHP"; ?>
    <?php Echo "Hello PHP"; ?> -->
</body>

</html>

</html>