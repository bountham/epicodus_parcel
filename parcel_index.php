<?php
    class Parcel {
        private $length;
        private $width;
        private $height;
        private $weight;

        function __construct($newLength, $newWidth, $newHeight, $newWeight) {
            $this->length = $newLength;
            $this->width = $newWidth;
            $this->depth = $newHeight;
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
        <div class="container">
            <h1>Specify thine dimensions:</h1>

            <div class="form-group">
                <label for="length">Length:</label>
                <input id="length" name="length" class="form-control"
                type="number">
            </div>
            <div class="form-group">
                <label for="width">Width:</label>
                <input id="width" name="width" class="form-control"
                type="number">
            </div>
            <div class="form-group">
                <label for="height">Height:</label>
                <input id="height" name="height" class="form-control"
                type="number">
            </div>
            <div class="form-group">
                <label for="weight">Weight:</label>
                <input id="weight" name="weight" class="form-control"
                type="number">
            </div>
        </div>
    </body>
</html>
