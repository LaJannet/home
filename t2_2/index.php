<?php
$r = rand(200, 500);
$s = M_PI * ($r * $r);
$rond = round($s);
echo "<div style=\"width:{$r}px;height:{$r}px;border-radius:50%;background:lime;position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);border: thick double #32a1ce;\"><h4 style=\"position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);\">S = $s ≈ $rond см^2</h4></div>";
