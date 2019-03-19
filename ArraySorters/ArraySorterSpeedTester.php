<?php

namespace ArraySorters;

abstract class ArraySorterSpeedTester {
    protected $my_array;            // Original array.
    protected $my_array_size;       // Array size.
    protected $my_sorted_array;     // Sorted array.
    protected $my_execution_time;   // Execution time.
    protected $my_name;             // Name of the sort method class set inside the class constructor.


    /**
    Constructor.
    */
    function __construct($array_size) {
        $this->my_array_size = $array_size;
        $this->fillArray();
        $this->speedTest();
    }


    /**
    Construct a float time.
    */
    private function microtimeFloat() {
       list($usec, $sec) = explode(" ", microtime());
       return ((float)$usec + (float)$sec);
    }


    /**
    Fill array with numbers. It needs to be sorted in opposite direction.
    */
    private function fillArray() {
        for ($t=0; $t<$this->my_array_size; $t++) {
            $this->my_array[] = $this->my_array_size - $t;
        }
    }

    
    /**
    Not implemented here but in child class.
    */
    abstract protected function sortArray();


    /**
    Do the actual speed test.
    */
    public function speedTest() {
        $time_start = $this->microtimeFloat();

        try {
            $this->sortArray();
        } catch (Exception $e) {
            echo "ERROR: Sort function not implemented for this class\n";
            return;
        }

        $time_end = $this->microtimeFloat();

        echo $this->my_name . ": time wasted sorting: " . ($time_end - $time_start) . "<br>\n";
        echo "Result: ".$this->my_sorted_array[0]." .... " . $this->my_sorted_array[999]."<br>\n";
    }


    /**
    Show explanation.
    */
    public static function printExplanation() {
        print "<i>An array with values x to 0 is sorted ascending so in opposite order.<br>";
        print "There are 3 different implementations of a sort function derived from this class.<br>";
        print "We look which method is fastest.\n";
        print "<br><br></i>";
    }
};

?>