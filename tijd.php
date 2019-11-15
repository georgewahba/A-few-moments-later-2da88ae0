<?php
array_shift($argv);
if (!isset($argv[0])) {
    echo "dit is geen tijd";
    exit();
}
$s = 0;
foreach ($argv as $a) {
  if (strpos($a, "s")) {
        $b = (int)$a;
        $s = $s+$b;
  } elseif (strpos($a, "m")) {
        $b = (int)$a;
        $s = $s+($b*60);
  } elseif (strpos($a, "u")) {
        $b = (int)$a;
        $s = $s+($b*3600);
  } elseif (strpos($a, "d")) {
        $b = (int)$a;
        $s = $s+($b*86400);
  } else {
      echo "dit is geen tijd";
		}
}
echo $s;
echo " seconden";
