<?php
$words = [
    "home-bred" => [
       "доморощений",
       "простий, без лоску"
    ],
    "etiolation" => "позбавлення хлорофілу",
    "youngster" => [
       "хлопець",
       "юнак",
       "парубок" 
    ],
    "belle" => "красуня", 
    "kneejerk" => "колінний рефлекс"
  ];

  echo "Words\n\n";
foreach ( $words as $key => $value ) {
	if (!is_array ( $value ))
		echo "$key:\n\t$value\n";
	else {
		echo "$key: \n";
		foreach ( $value as $v )
			echo "\t$v\n";
	}
        echo "\n";
}
echo "\n\n";

$languages = array ();

foreach ( $words as $word => $cl ) {
	if (!is_array ($cl)) {
		$languages[$cl][] = $word;
	} else {
		foreach ($cl as $l) {
			$languages [$l] [] = $word;
		}
	}
}

foreach ($languages as $key => $value) {
	if (!is_array ($value))
		echo "$key:\n\t$value";
	else {
		echo "$key: \n";
		foreach ( $value as $v )
			echo "\t$v\n";
	}
}
echo "\n\n";