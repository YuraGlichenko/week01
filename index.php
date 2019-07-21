<?php
require_once 'src/functions.php';

echo task1( ['Ho Ho Ho', 'its', 'my', 'world!'], false), "<br>";

task2("+", 1, 2, 3, 23.4);
task2("-", 1, 2, 3, 23.4);
task2("/", 13, 2.6);
task2("%", 1376, 4, 2, -2);
task3(5,7);
task4();
task5();
file_put_contents('test.txt', 'Hello again!');
task6('test.txt');