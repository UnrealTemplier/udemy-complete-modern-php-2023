<?php

function log1() {
    return "log1<br>";
}

$log2 = function() {
    return "log2<br>";
};

function run(callable $callback) {
    if ($callback) {
        echo $callback();
    }
}

// find callable by function name
run("log1");

// pass callable as anonymous function via variable
run($log2);

// pass callable as anonymous function directly
run(function() {
    return "log3<br>";
});

// pass callable as arrow function directly
run(fn() => "log4");