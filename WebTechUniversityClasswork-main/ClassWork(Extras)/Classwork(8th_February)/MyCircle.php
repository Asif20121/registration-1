<?php 
    class MyCircle {
        private $radius;
        private $PI = 3.14159;
        function __construct($radius = 1) {
            $this->radius = $radius;
        }
        function getRadius() {
            return $this->radius;
        }
        function setRadius( $radius ) {
            $this->radius = $radius;
        }
        function getArea() {
            return 2*$this->PI*$this->radius*$this->radius;
        }
        function __toString() {
            return 'The circle radius: '.$this->radius.', area: '.$this->getArea().'\n';
        }
        function __destruct() {
            echo "Object destroyed";
        }
    }
?>