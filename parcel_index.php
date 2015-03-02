<?php
    class Parcel {
        private $length;
        private $width;
        private $height;
        private $weight;

        function __construct($newLength, $newWidth, $newHeight, $newWeight) {
            $this->length = $newLength;
            $this->width = $newWidth;
            $this->height = $newHeight;
            $this->weight = $newWeight;
        }

        function getLength() {
            return $this->length;
        }

        function getWidth() {
            return $this->width;
        }

        function getHeight() {
            return $this->height;
        }

        function getWeight() {
            return $this->weight;
        }

        function setLength($newLength) {
            $this->length = $newLength;
        }

        function setWidth($newWidth) {
            $this->width = $newWidth;
        }

        function setHeight($newHeight) {
            $this->height = $newHeight;
        }

        function setWeight($newWeight) {
            $this->weight = $newWeight;
        }

        function volume() {
            return $this->length * $this->width * $this->height;
        }

        function costToShip() {
            return $this->weight + $this->volume();
        }
    }

    $tempLength = $_GET['length'];
    $tempWidth = $_GET['width'];
    $tempHeight = $_GET['height'];
    $tempWeight = $_GET['weight'];

    $tempPackage = new Parcel($tempLength, $tempWidth, $tempHeight, $tempWeight);

    echo $tempPackage->costToShip();
?>
