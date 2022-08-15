<?php
    include '../vendor/autoload.php';
    include '../toUpperFirstChar.php';
    include '../dataProvider.php';
    

    use PHPUnit\Framework\TestCase;

    class UpCharTest extends TestCase {
        /**
         * @dataProvider toUpperFirstCharProvider
         */
        public function testToUpperFirstChar($str, $expected) {
            $calc = new UpChar();
            $result = $calc->toUpperFirstChar($str);
            $this->assertEquals($expected, $result);
        }
    }