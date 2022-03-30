<?php

$x = " ' hello";

$x = str_replace($x, "'", '');
echo $x;