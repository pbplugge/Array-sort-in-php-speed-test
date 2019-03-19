<?php

namespace ArraySorters;

require_once("ArraySorterSpeedTester.php");

class ArraySorterQuickSort extends ArraySorterSpeedTester {

    /**
    Child constructor, parent does the real work.
    */
    function __construct($size) {
        $this->my_name = "ArraySorterQuickSort";
        parent::__construct($size);
    }


    /**
    Sorts array with quick sort algorithm.
    */
    public function sortArray() {
        $done = false;
      
        $this->my_sorted_array = $this->my_array;
      
        while (!$done) {
            $done = true;
            for ($t = 0; $t < $this->my_array_size-1; $t++) {
                if ($this->my_sorted_array[$t] > $this->my_sorted_array[$t+1]) {
                    $done = false;
                    $nr = $this->my_sorted_array[$t];
                    $this->my_sorted_array[$t] = $this->my_sorted_array[$t+1];
                    $this->my_sorted_array[$t+1] = $nr;
                }
            }
        }
    }

};

?>
