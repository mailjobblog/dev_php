<?php

// 闭包的语法相当简单，需要注意的关键字就只有use，use是连接闭包和外界变量
$var = "test var";
$f = function() use($var) {
    // TODO
    echo $var;
};


// 方法1
// 把匿名函数当做参数传递，并且调用它
$f1 = function ($str) {
    return $str;
};
function call($func) {
    return $func("test params");
}
echo call($f1);
echo PHP_EOL;


// 方法2
// 将匿名函数进行传递
$t2 = call(function () {
    return "test function 22222";
});
echo $t2;
echo PHP_EOL;


// 方法三
// 连接闭包和外界变量的关键字：USE
function getMoney() {
    $rmb = 1;
    $dollar = 6;
    $func = function() use ( $rmb, $dollar ) {
        echo $rmb;
        echo $dollar;
    };

    // 函数调用
    $func();
}
getMoney();


// 方法四
// 在匿名函数中改变上下文的变量
function getMoney2() {
    $rmb = 1;
    $func = function() use ( &$rmb ) {
        echo $rmb . "<br>";
        //把$rmb的值加1
        $rmb++;
    };
    $func();
    echo $rmb;
}
getMoney2();