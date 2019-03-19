<?php

namespace ArraySorters;

require_once("ArraySorterSpeedTester.php");

class ArraySorterDoubleLoop extends ArraySorterSpeedTester {

    /**
    Child constructor, parent does the real work.
    */
    function __construct($size) {
        $this->my_name = "ArraySorterDoubleLoop";
        parent::__construct($size);
    }

    /**
    Sorts array with a double loop.
    */
    public function sortArray() {
        for ($t = 1; $t <= $this->my_array_size; $t++) {
            for ($t2 = 0; $t2 < $this->my_array_size; $t2++) {
                if ($this->my_array[$t2] == $t) {
                    $this->my_sorted_array[] = $t;
                }
            }
        }
    }

};

?>
