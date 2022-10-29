<?php
$string = 
"<p>Права користувачів:</p>
<ul>
  <li>Administrator</li>
  <li>Editor</li>
  <li>Subscriber</li>
</ul>";
$pattern = "~<li>\w+\</li>~";

if (preg_match_all($pattern, $string, $array))
    print_r($array);

for ($i=0; $i < count($array[0]); $i++) { 
  $reg = strip_tags($array[0][$i]);
  $string = str_replace($array[0][$i], "<li><a href=\"http://www.php.kh.ua/script.php?role=$reg\">$reg</a></li>", $string);
}

print $string;