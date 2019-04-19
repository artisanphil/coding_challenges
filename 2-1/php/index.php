<?php
for ($row = 1; $row <= 4; $row++) {
    for ($hashNum = 1; $hashNum <= 10 - $row * 2; $hashNum++) {
        echo "#";
    }
    echo "\n";
    echo str_repeat(" ", $row);
}
