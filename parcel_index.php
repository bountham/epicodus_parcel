<?php
    class Parcel {
        private $length;
        private $width;
        private $depth;
        private $weight;

        function __construct($newLength, $newWidth, $newDepth, $newWeight) {
            $this->length = $newLength;
            $this->width = $newWidth;
            $this->depth = $newDepth;
            $this->weight = $newWeight;
        }

        function getLength() {
            return $this->length;
        }

        function getWidth() {
            return $this->width;
        }

        function getDepth() {
            return $this->depth;
        }

        function getWeight() {
            return $this->weight;
        }

        function setLength($newLength) {
            $this->length = $newLength;
        }

        function setWidth($newWidth){
            $this->width = $newWidth;
        }
        function setDepth($newDepth){
            $this->depth = $newDepth;
        }
        function setWeight($newWeight){
            $this->weight = $newWeight;
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Parcel Calculator</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/
        3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/parcel_style.css">
    </head>
    <body>

    </body>
</html>
