
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php
        echo "<h1>tt's webpage</h1>";
        echo "Hello World!!!";
        echo "<hr>";
        echo "<p>lorem ipsum dolor sit amet</p>";

        $charName = "john";
        $charAge = 45;
        $charGpa = 2.05;
        $isMale = true;
        echo "Once there was a man named $charName.<br>";
        echo "$charName was $charAge years old.<br>";
        echo "He liked his name $charName.<br>";
        echo "He did not like being $charAge.<br>";
        $charName = "peter";
        $charAge = 80;
        echo "Once there was a man named $charName.<br>";
        echo "$charName was $charAge years old.<br>";
        echo "He liked his name $charName.<br>";
        echo "He did not like being $charAge.<br>";
        echo $isMale;
        echo "<br>";
        echo $charGpa;
        echo "<br>";
        echo "<hr>";

        $stringEx = "Asd Fgh Jkl Zxc Vbn Qwe Rtyu";
        echo strtolower($stringEx), "<br>";
        echo strtoupper($stringEx), "<br>";
        echo strlen($stringEx), "<br>";
        echo $stringEx[0], "<br>";
        echo $stringEx[1], "<br>";
        $stringEx[0]="Z";
        echo $stringEx, "<br>";
        echo str_replace("Fgh", "Vbn", $stringEx), "<br>";
        echo substr($stringEx, 8), "<br>";
        echo substr($stringEx, 8, 5), "<br>";
        echo "<hr>";
        echo 4 + 8, "<br>";
        echo 4 - 8, "<br>";
        echo 4 * 8, "<br>";
        echo 4 / 8, "<br>";
        echo "<hr>";
        echo 4.2 + 8.4, "<br>";
        echo 4.2 - 8.4, "<br>";
        echo 4.2 * 8.4, "<br>";
        echo 4.2 / 8.4, "<br>";
        echo "<hr>";
        echo 17 % 3;
        echo "<hr>";

        $num = 151;
        echo $num, "<br>";
        $num++;
        echo $num, "<br>";
        $num--;
        $num--;
        echo $num, "<br>";
        echo "<hr>";
        $num = $num + 30;
        echo $num, "<br>";
        $num += 30;
        echo "<br>";
        echo "<hr>";
        echo abs(-50);
        echo "<br>";
        echo abs(40);
        echo "<hr>";
        echo pow(2, 5);
        echo "<br>";
        echo sqrt(225);
        echo "<br>";
        echo "<hr>";
        echo max(2, 8 , 13);
        echo "<br>";
        echo min(2, 8 , 13);
        echo "<br>";
        echo "<hr>";
        echo round(4.2);
        echo "<br>";
        echo round(4.8);
        echo "<br>";
        echo ceil(4.2);
        echo "<br>";
        echo floor(4.8);
        echo "<hr>";








       ?>
  </body>
</html>
