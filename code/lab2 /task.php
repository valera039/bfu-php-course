<?php

function firstTask()
{
	$veryBadUnclearName = '15 chicken wings';

	$order = &$veryBadUnclearName;
	$order .= ' with double sauce';

	echo "\nYour order is: $veryBadUnclearName.";
	echo "\n";

}

function secondTask()
{
	$firstArg = 42;
	echo $firstArg;
	echo "\n";
	$secondArg = 33.932;
	echo $secondArg;
	echo "\n";
	echo 1+2+3+4+5+6-9;
	echo "\n";

	$lastMonth = 1187.23;
	$thisMonth = 1089.98;
	echo "difference: " . ($lastMonth - $thisMonth);
	echo "\n";
}

firstTask();
secondTask();