# 闭包和匿名函数

在PHP中匿名函数（Anonymous functions），也叫闭包函数（ closures ），允许临时创建一个没有指定名称的函数。经常用作回调函数（callback）的参数。 当然，也有其他应用的情况。  
注：php闭包是PHP5.3版本之后才有的

## 概念理解

### 闭包

闭包是可以包含自由（未绑定到特定对象）变量的代码块；这些变量不是在这个代码块内或者任何全局上下文中定义的，而是在定义代码块的环境中定义（局部变量）。  
“闭包” 一词来源于以下两者的结合：要执行的代码块（由于自由变量被包含在代码块中，这些自由变量以及它们引用的对象没有被释放）和为自由变量提供绑定的计算环境（作用域）。   
在编程领域我们可以通俗的说：子函数可以使用父函数中的局部变量，这种行为就叫做闭包。  
闭包:是指在创建时封装周围状态的函数.即使闭包所在的环境不存在了,闭包中封装的状态依然存在.  

### 匿名函数

PHP匿名函数和闭包使用的句法与普通函数相同,但匿名函和闭包数其实是伪装成函数的对象.  
匿名函数:就是没有名称的函数.匿名函数可以赋值给变量,对象传递.不过匿名函数仍是函数,因此可以调用,还可以传入参数.匿名函数特别适合作为函数或方法的回调.

### 区别与比较

注意:理论上讲,闭包和匿名函数是不同的概念. 不过,PHP将其视作相同的概念.  
闭包的语法相当简单，需要注意的关键字就只有use，use是连接闭包和外界变量。  
