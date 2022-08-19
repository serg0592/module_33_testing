<?php
    //подключаем тестируемый юнит
    include 'toUpperFirstChar.php';

    use PHPUnit\Framework\TestCase;

    class UpCharTest extends TestCase {
        // создаем dataProvider для передачи объема данных в тест
        /**
         * @return string[][]
         */
        public function toUpperFirstCharProvider() {
            return [
                ['hello', 'Hello'],
                [' hello', ' Hello'],
                ['Hello', 'Hello'],
                ['0hello', '0Hello'],
            ];
        }

        // создаем юнит-тест для функции toUpperFirstChar класса UpChar
        /**
         * @dataProvider toUpperFirstCharProvider
         */
        //объявляем функции-тестер (аргументы функции - соответствующие данные из dataProvider)
        public function testToUpperFirstChar($str, $expected) {
            //создаем экземпляр тестируемого класса
            $calc = new UpChar();
            //записываем результат работы тестируемой функции
            $result = $calc->toUpperFirstChar($str);
            //используем assertEquals для проверки проверки результатов
            $this->assertEquals($expected, $result);
        }

        //объявляем функцию-тестер, зависящую от другой функции-тестера
        /**
         * @depends testToUpperFirstChar
         * @dataProvider toUpperFirstCharProvider
         */
        public function testIsString($result) {
            //используем asserIsString для проверки проверки результатов
            $this->assertIsString($result);
        }
    }