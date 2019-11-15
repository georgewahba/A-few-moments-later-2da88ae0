<?php
$a=explode(" ", $argv[1]);
$antwoord=0;



foreach ($a as $value) {
$last = substr($value, -1);
switch ($last) {
	case "d":
  $antwoord=$antwoord+((int)$value*86400);
		break;
		case "u":
	$antwoord=$antwoord+((int)$value*3600);
			break;
		case "m":
	$antwoord=$antwoord+((int)$value*60);
				break;
	case "s":
  $antwoord=$antwoord+(int)$value;
		break;

	default:
	echo "is geen tijd";
		break;
}
}
print_r($antwoord);
print_r(" seconde");














// if (!isset($argv[0])) {
//     echo "dit is geen tijd";
//     exit();
// }
//
//
// $s = 0;
// foreach ($argv as $a) {
//   if (strpos($a, "s")) {
//         $b = (int)$a;
//         $s = $s+$b;
//   } elseif (strpos($a, "m")) {
//         $b = (int)$a;
//         $s = $s+($b*60);
//   } elseif (strpos($a, "u")) {
//         $b = (int)$a;
//         $s = $s+($b*3600);
//   } elseif (strpos($a, "d")) {
//         $b = (int)$a;
//         $s = $s+($b*86400);
//   } else {
//       echo "dit is geen tijd";
// 		}
// }
// echo $s;
// echo " seconden";
