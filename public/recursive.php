<?php

function doSomethingRecursive($level): void {
    if ($level >= 0) {
        doSomethingRecursive($level - 1);
    }
}

doSomethingRecursive(1000);
