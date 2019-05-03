<?php
class symbolDrawings
{
    private $symbol;

    public function __construct($symbol)
    {
        $this->symbol = $symbol;
    }
    public function createHalfX($row)
    {
        echo str_repeat(" ", $row - 1);
        echo str_repeat($this->symbol, $row);

        //total size of grid is 15.
        $paddingLength = 15 - ($row * 4);
        if ($paddingLength >= 0) {
            echo str_repeat(" ", $paddingLength + 1);
        }

        echo str_repeat($this->symbol, $row);
        echo str_repeat(" ", $row - 1);
        echo "\n";
    }
}
$myHashDrawing = new symbolDrawings("#");

for ($row = 1; $row <= 4; $row++) {
    $myHashDrawing->createHalfX($row);
}
for ($row = 4; $row > 0; $row--) {
    $myHashDrawing->createHalfX($row);
}
