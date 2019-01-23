<?php

function doSomethingRecursive($level): void {
    if ($level >= 0) {
        echo $level.' ';
        doSomethingRecursive($level - 1);
    }
}

doSomethingRecursive(1000);
echo 'ignition !';
