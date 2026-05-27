<!DOCTYE html>
<html>

<body>

<pre>
<?php

echo 'Hello World';

$x=5;
$name="<h2>John</h2>";
$name1="Doe";


echo $x;
echo $name ;

echo "Hello";
echo "\tHello";

var_dump(5);
var_dump("John");



echo "Hii \n  $x \n\n\n";

//STRING FUNCTION
echo "String Function\n";
echo strlen("Hello World");
echo "\n";

echo strlen($name1);

echo "\n";

echo str_word_count("Hello Hi How are you");

echo "\n";

$txt="I like PHP like";

var_dump(str_contains($txt, "mnb"));

echo "\n";

var_dump(str_starts_with($txt," "));

echo "\n";

var_dump(str_ends_with($txt, "like"));

//MODIFY STRING FUNCTION

$x="Hello BCA";

echo strtoupper($x);

echo "\n";

echo strtolower($x);

echo "\n";

echo str_replace("BCA", "MCA", $x);

echo "\n";

echo strrev($x);

echo "\n";

$y="    hello   everyone   ";
echo $y;
echo "\n";
echo trim($y);

//STRING CONCATENATION

echo "\n";


$c="hello";
$b="World";

$z=$c ." ". $b;
echo $z;





?>



</pre>

</body>
</html>

