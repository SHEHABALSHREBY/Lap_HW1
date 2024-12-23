<?php


# المتغيرات والعمليات الحسابية

$var1 = 20;
$var2 = 10;

echo "$var1+$var2 = ".($var1+$var2).'<br>';
echo "$var1-$var2 = ".($var1-$var2).'<br>';
echo "$var1*$var2 = ".($var1*$var2).'<br>';
echo "$var1/$var2 = ".($var1/$var2).'<br>';
echo "$var1%$var2 = ".($var1%$var2).'<br>';
#echo "$var1+$var7 = ".($var1+$var7).'<br>';
#echo "$var1+$var8 = ".($var1+$var8).'<br>';



# معاملات العمليات الحسابية
  $var1+=$var2;       # $var1=$var1+$var2;
  $var1-=$var2;      # $var1=$var1-$var2;
  $var1*=$var2;      # $var1=$var1*$var2;
  $var1/=$var2;      # $var1=$var1/$var2;
  $var1%=$var2;      # $var1=$var1%$var2;
  $var1.=$var2;      # $var1=$var1.$var2; 


 $var1 = 10;
 $var2 = 10;
 $var3 = 10;
 $var4 = 10;
 $var5 = 10;
 $var6 = 10;

 $var1 += 10;
 $var2 -= 10;
 $var3 *= 10;
 $var4 /= 10;
 $var5 %= 10;
 $var6 .= 10;

 #الطباعة
  echo $var1.'<br>'.$var2.'<br>'.$var3.'<br>'.$var4.'<br>'.
 $var5.'<br>'.$var6.'<br>';


# الثوابت

const SHEHAB = "Student";  

const ABRAHIM = 'Manager';

define("SEED","cooker");

echo 'Job Shehab is ='." ".SHEHAB."<br/> ".
'Job Amrahim is ='." " .ABRAHIM."<br/>".
'Job Seed is ='." ".SEED."<br/>";



#(if And if_else And else_if condetion statment)

$s= 10;
if ($s == 10) ECHO 'trouth the $s ='." ".$s."<br>";


if(true) echo "true<br>";

if(true){ echo "<h1>true</h1>";
        echo "<h1>inside if</h1>";}  #جميع الاوامر داخل الاقواس تتبع الشرط نفسه

if(false) echo "false<br>";

if(false)
        echo "<h2>false</h2>";  #السطر الاول فقط يتبع الشرط اذا لاتوجد اقواس
        echo "outside if";

  
if(0)  #اي عدد يعبر عن اي قيمة ماعدا الصفر قيمتة ترو 
        echo "<h3>0 true</h3>";
else echo "<h3>0 false</h3>";


if(13) echo "<h3>13 true</h3>";

else echo "<h3>13 false</h3>";

        
if(-50) echo "<h3>-50 true</h3>";

else echo "<h3>-50 false</h3>";

        
if(null) echo "<h3>null true</h3>";

else echo "<h3>null false</h3>";


if('') echo "<h3>'' true</h3>";

else echo "<h3>'' false</h3>";

        
if(' ') echo "<h3>' ' true</h3>";  

else echo "<h3>' ' false</h3>";


if('user1') echo "<h3>user1 true</h3>";

else echo "<h3>user1 false</h3>";   


$id = 200;
if($id == 100)
{
    echo "<h3><a href='page1.php'> go page1 </a></h3>";
}

else if($id == 200)
{
    echo "<h3><a href='page2.php'> go page2 </a></h3>";
}

else if($id == 400)
{
       echo "<h3><a href='page3.php'> go page3 </a></h3>";
}
else if($id == 500)
{
       echo "<h3><a href='page4.php'> go page4 </a></h3>";
}
else
{
       echo "<h3><a href='index.php'> go home </a></h3>";
}


 $id = 250;
 switch($id)
 {
        case 100:
                echo "<h3><a href='page1.php'> go page1 </a></h3>";
                break;
        case 200:
                echo "<h3><a href='page3.php'> go page3 </a></h3>";
        
        case 300:
                echo "<h3><a href='page4.php'> go page4 </a></h3>";
                break;
        default:
                echo "<h3><a href='index.php'> go home </a></h3>";
        
}



# الدوران(FOR,While, do_while)


for($i=0;$i<10;$i++)   # for loop
 {
        echo '<h3>$i='.$i.'</h3>';
 }

 for($i=0;$i<10;++$i) echo '<h3>$i='.$i.'</h3>'; # if was one line


 for($i=0;$i<10;$i++)
 {
        if($i == 5) continue; # Don't carry with this number  
        echo '<h3>$i='.$i.'</h3>';
 }

 for($i=0;$i<10;++$i)
 {
        if($i == 5) break; # this to for exit
        echo '<h3>$i='.$i.'</h3>';
 }

 $count = 1;
 while($count <= 10)
 {
        echo "<h3> Hi </h3>";
        $count++;
 }
 while(true)
 {
        echo "<h3> YES </h3>";
        if($count++ == 25) break;
 }

 do
 {
        echo "<h3>Hi</h3>";
        
} while(false) ;

 $count = 0;
 do
 {
  echo '<h3>$count = '.++$count.'</h3>';
        
 } while($count < 10);

 ?>