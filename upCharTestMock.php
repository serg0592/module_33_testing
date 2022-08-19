<?php
//подключаем тестируемый юнит
    include 'toUpperFirstChar.php';

    use PHPUnit\Framework\TestCase;

    class UpCharTestMock extends TestCase {
        //объявляем функцию-тестер 
        public function testToUpperFirstChar() {
            //создаем мок тестируемого класса
            $upCharMock = $this->getMockBuilder('UpChar')->getMock();
            //сообщаем моку, какой метод вызвать и какой результат должен быть получен
            $upCharMock->method('toUpperFirstChar')->willReturn('Hello');
            //вызываем мок, записываем результат
            $result = $upCharMock->toUpperFirstChar('hello');
            //используем assertEquals для проверки проверки результатов
            $this->assertEquals('Hello', $result);
        }
    }