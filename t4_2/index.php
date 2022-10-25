<?php
$t = rand(20, -20);
echo "t = $t";
print "<table style =\"border:solid; border-radius:50px; padding: 15px 0;\">";
for ($i=20; $i > -21; $i--) { 
        print "<tr><td style =\"border:solid;\">$i</td>";
        echo ( $i < $t ? "<td  style =\" background:red; width:30px;\"></td></tr>" : "<td  style =\" background:orange; width:30px;\"></td></tr>");
}
print "</table>";