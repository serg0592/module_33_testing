<?php 
    class UpCharProvider {
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
    }
?>