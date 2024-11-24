<?php

$value = 1;
// $value = 2;
// $value = 3;
// $value = '2'; // type juggling

switch ($value) {
    case 1:
        echo "1";
        break;
    case 2:
    case 3:
        echo '2 or 3';
        break;
    default:
        echo "default";    
}