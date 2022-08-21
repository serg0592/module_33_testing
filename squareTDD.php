<?php
    include 'square1.php';

    use PHPUnit\Framework\TestCase;

    class NumSquareTestTDD extends TestCase {
        public function testNumSquareDataProvider() {
            return [
                [2, 4],
                [-4, 16],
                [10, 100],
                [0.2, 0.04],
                [-0.4, 0.016],
                [0.01, 0.0001],
                ['str', 'str'],
                ['2', '2'],
                ['@#$%', '@#$%'],
                [$testObject, $testObject],
                [$testArr[], $testArr[]], 
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