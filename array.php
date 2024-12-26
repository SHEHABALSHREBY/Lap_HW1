
 <html>

    <head>

        <title> <?php echo "learn_php ";?></title> 

    </head>
</html>

    
<body>

<?php

# تختلف المصفوفات في هذي اللغة .لها تعريف خاص وستخدام اسهل وافضل

 $myArr[] = 10;  //key = 0 , value = 10

 $myArr[] = 12.16;  //key = 1 , value = 12.16   

 $myArr[] = true;   //key = 2 , value = true 

 $myArr[] = "username";  //key = 3 , value = "username"  

 $myArr[] = 'password';   //key = 4 , value = 'password'  
 
 $myArr[] = '@emial';  //key = 5 , value = 'pemial'
  
  for($i = 0; $i < 6; $i++)
  {
  echo '<h3>'.$myArr[$i].'</h3>';
  }


# طباعة العناصر علا شكل مصفوفة
  $myArr[0] = 20;
  $myArr[1] = 5.2;
  $myArr[2] = false;
  $myArr[3] = "username";
  $myArr[4] = 'password';
  $myArr[5] = '@emial';
  for($i = 0; $i < 6; $i++)
  {
         echo '$myArr[$i] ='."{$myArr[$i]}" ."<br/>"; 
  }


  $myArr = array(10, 12.16, true, "username", 'password');
  for($i = 0; $i < 5; $i++)
  {
     echo "<h3>{$myArr[$i]}</h3>";
  }


  $myArr = array(10, 12.16, true, "username", 'password');
  for($i = 0; $i < count($myArr); $i++)
  {
         echo "<h3>{$myArr[$i]}</h3>";
  }


  $myArr1[0][] = "username";
  $myArr1[0][] = "password";
  $myArr1[0][] = 10;
  $myArr1[1][] = 12;
  $myArr1[1][] = 45.99;
  $myArr1[1][] = true;
  for($i = 0; $i < count($myArr1); $i++)
  {
  for($j = 0; $j < count($myArr1[$i]); $j++)
  {
      echo "{$myArr1[$i][$j]}<br/>";
  }
}

$myArr_2 = array(
    array_2('username', "password", 10),
    array_2(12, 45.99, true)
  );
for($i = 0; $i < count($myArr_2); $i++)
{
for($j = 0; $j < count($myArr_2[$i]); $j++)
{
   echo "<h3>{$myArr[$i][$j]}</h3>";
}
}

   // المصفوفة المترابطة
$myArr['key'] = 'value '; 

$myArr['name'] = 'name ';    
 $myArr['age']  = 30;
 $myArr['city'] = ' city ';
 $myArr['phone']= 125668522;

 echo $myArr['name'].$myArr['age'].$myArr['city'].$myArr['phone'];



 $myArr2['name'] = 'username ';
 $myArr2[]       = "username 2";
 $myArr2['age']  = 30;
 $myArr2[]       = 40;
 $myArr2['city'] = 'luxor';
 $myArr2[]       = 'Cairo';
 $myArr2['phone']= 125668522;
 $myArr2[]       = 124559587;

 
 echo var_export($myArr2);


?>

</body>