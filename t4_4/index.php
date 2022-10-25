<?php
for ($i=1; $i < 11; $i++) { 
    echo ${"x".$i} = $i . "\n";
}