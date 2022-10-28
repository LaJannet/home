<?php
$text = "loodman is a very tall, extremely muscular demon with an overall macabre appearance; his chest is covered in a black and red demonic breastplate that wraps itself around his lower abdomen. Attached to his breastplate are extremely large, irregularly-shaped metallic pauldrons that connect and fade out into his extremely long cloak, which he uses to keep hooded his head, upon which he wears what appears to be a red oni mask with his eye area painted yellow all around extending to his chin to conceal his face. ";
$new = wordwrap(">".$text,20,"\n>");
echo $new;