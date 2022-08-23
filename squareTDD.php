<?php
    include 'square.php';

    use PHPUnit\Framework\TestCase;

    class emptyClass {

    }

    

    class squareTDD extends TestCase {
        /**
         * @return array
         */
        public function testNumSquareDataProvider() {
            $testObject = new emptyClass;
            $testArr = [];
            return [
                "num1" => [2, 4],
                "num2" => [-4, 16],
                "num3" => [10, 100],
                "num4" => [0.2, 0.04],
                "num5" => [-0.4, 0.16],
                "num6" => [0.01, 0.0001],
                "str1" => ['str', 'str'],
                "str2" => ['2', '4'],
                "str3" => ['@#$%', '@#$%'],
                "obj1" => [$testObject, $testObject],
                "arr1" => [$testArr, $testArr], 
            ];
        }

        /**
         * @dataProvider testNumSquareDataProvider
         */
        public function testNumSquare($num, $expected) {
            $square = new Square;
            $result = $square->numSquare($num);
            $this->assertEquals($expected, $result);
        }
    }