<?php

// 1. ���������� ���������
// a) �������� ���������, ������� ������ ������ 'abba', 'adca',
// 'abea' �� �������: ����� 'a', ��� ����� �������, ����� 'b'.
// ������ ������: $str = 'ahb acb aeb aeeb adcb axeb';

$str = 'ahb acb aeb aeeb adcb axeb';
$matches = [];
preg_match_all('/(a..b)/', $str, $matches);

print_r($matches[0]);
echo "\n";

// b) ���� ������ � ������ ������� 'a1b2c3'. � �������
// ��������� ������������ ������ ���, ����� ������ ����
// ����� ������ �� ����.

$str = 'a1b2c3';
$result = preg_replace_callback('/\d/', static function($matches) {
	return $matches[0] ** 3;
}, $str);
echo $result. "\n";


