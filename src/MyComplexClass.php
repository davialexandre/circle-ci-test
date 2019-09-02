<?php

class MyComplexClass {
    public $property1 = '';
    public $property2 = 1;

    private $property3 = null;
    protected $property4;
    public $property5;
    public $property6;

    /**
     * @var int
     */
    public $property7;
    public $property8;

    public function __construct() {
        $instance = new MyClass();
    }

    public function test($test) {
        if (true) {
            return 'a';
        }

        return 'b';
    }

    private function test2(): int {
        return $this->property7;
    }

    private function test3(): bool {
        return $this->test2();
    }

    private function test4($a, $b, $c, $d, $e, $f, $g, $h) {
        for (;;) {
            while (true) {
                while (true) {
                    echo 'a';
                }
            }
        }
    }
}
