<?php
print "<table style =\"border:solid;\">";
$n = rand(1, 7);
for ($i=1; $i < $n; $i++) { 
    if ($i%2!=0) {
        print "<tr><td style =\"border:solid; background-color:orange; padding: 0 10px;\">$i</td> <td  style =\"border:solid; background-color:black;\"> <img style =\"width:100px; padding: 10px\" src= \"images/img_{$i}.jpg\"><p style =\"color:lightblue; margin: auto; text-align: center;\">img_{$i}.jpg</p></td></tr>";
    }
}
print "</table>";