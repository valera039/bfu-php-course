<?php

// 1. ������ �� ������
function firstTask()
{
	$veryBadUnclearName = '15 chicken wings';
	$order = &$veryBadUnclearName;
	$order .= ' with double sauce';

	echo "\nYour order is: $veryBadUnclearName." . "\n";
}

// 2. �����
function secondTask()
{
	$firstArg = 42;
	echo $firstArg. "\n";
	$secondArg = 33.932;
	echo $secondArg . "\n";
	echo (1+2+3+4+5+6-9) . "\n";

	$lastMonth = 1187.23;
	$thisMonth = 1089.98;
	echo "Difference: " . abs($lastMonth - $thisMonth). "\n";
}

// 3. ��������� � �������
function thirdTask()
{
	$learnedLanguages = ['Ruby', 'Python', 'JavaScript', 'C++'];
	$numLanguages = count($learnedLanguages);
	$months = 11;
	$days = $months * 16;

	$daysPerLanguage = $days / $numLanguages;
	echo $daysPerLanguage . "\n";
}

// 12. �������
function fourthTask()
{
	echo 'Eight square equal : '. 8 ** 2 . "\n";
}

// 13. ��������� ����������
function fifthTask()
{
	$myNum = 26;
	$answer = $myNum;
	$answer += 2;
	$answer *= 2;
	$answer -= 2;
	$answer /= 2;
	$answer -= $myNum;

	echo 'Result: ' . $answer . "\n";
}

function sixthTask()
{
	$a = 10;
	$b = 3;
	echo $a % $b . "\n";

	$a = 32;
	$b = 7;
	$module = $a % $b;
	if ($module)
	{
		echo '������� � ��������: ' . $module ;
	}
	else
	{
		echo '�������' . "\n";
	}

	$st = pow(2, 10);

}

// firstTask();
// secondTask();
// thirdTask();
// fourthTask();
// fifthTask();