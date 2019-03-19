<?php

namespace ArraySorters;

require_once("ArraySorterSpeedTester.php");

class ArraySorterDictionary extends ArraySorterSpeedTester {

    /**
    Child constructor, parent does the real work.
    */
    function __construct($size) {
        $this->my_name = "ArraySorterDictionary";
        parent::__construct($size);
    }


    /**
    Sorts array by putting numbers in array as dictionary.
    */
    protected function sortArray() {
        $indexes = [];

        foreach ($this->my_array as &$nr) {
            $indexes[$nr] = 1;
        }

        for ($t = 1; $t <= $this->my_array_size; $t++) {
            if (array_key_exists($t, $indexes))
                $this->my_sorted_array[] = $t;
        }
    }

};

?>
