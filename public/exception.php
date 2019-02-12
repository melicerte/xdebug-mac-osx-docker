<?php

function thisThrowsAnException()
{
    throw new \Exception('This is an amazingly useless exception');
}

thisThrowsAnException();