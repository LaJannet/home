<?php
$words1 = ["home-bred" => "доморощений", "etiolation" => "позбавлення хлорофілу", "youngster" => "парубок", "kneejerk" => "колінний рефлекс"];
$words2 = ["home-bred" => "простий, без лоску", "etiolation" => "позбавлення світла", "youngster" => "хлопець", "belle" => "красуня", "kneejerk" => "рефлекс колін"
  ];

  $words = array_merge_recursive($words1, $words2);
// $inte = array_intersect_key($words1, $words2);
// $inte2 = array_intersect_key($words, $inte);

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