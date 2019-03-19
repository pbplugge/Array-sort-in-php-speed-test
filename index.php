<?php

// Turn on all errors to check if all is ok.
error_reporting(E_ALL);
ini_set('display_errors', 1); 

// Require the various speed sorters.
require("ArraySorters/ArraySorterDoubleLoop.php");
require("ArraySorters/ArraySorterDictionary.php");
require("ArraySorters/ArraySorterQuickSort.php");

use ArraySorters\ArraySorterDoubleLoop as double_loop;
use ArraySorters\ArraySorterQuickSort  as quick_sort;
use ArraySorters\ArraySorterDictionary as dictionary;

ArraySorters\ArraySorterSpeedTester::PrintExplanation();


// Do the tests.
new double_loop(1000);
new quick_sort (1000);
new dictionary (1000);

?>