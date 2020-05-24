# PHP基礎
 
## 變數 variable
### 規則
1. 首字不可為數字
2. 大小寫有別
3. 符號只可用底線 
## 資料型別 data type

1. 字串 string
2. 整數 int
3. 浮點數 float
4. 布林 boolean

### 常數
```php
define("常數名稱","值");
```
### 運算子 operator
#### 算術運算子
```php
$x = 100;
$y = 50;

echo $x + $y;//150
echo $x - $y;//50
echo $x * $y;//5000
echo $x / $y;//2
echo $x % $y;//餘數0
```
***
#### 比較運算子
```php
$x = 100;
$y = "100";

var_dump($x > $y);  //bool(false)
var_dump($x < $y);  //bool(false)
var_dump($x >= $y); //bool(true)
var_dump($x <= $y); //bool(true)
var_dump($x == $y); //bool(true)
var_dump($x === $y);//bool(false)
var_dump($x != $y); //bool(false)
var_dump($x !== $y);//bool(true)
```
***
#### 賦值運算子
```php
echo $x = $y;
echo $x += $y; //$x = $x + $y     
echo $x -= $y; //$x = $x - $y     
echo $x *= $y; //$x = $x * $y     
echo $x /= $y; //$x = $x / $y     
echo $x %= $y; //$x = $x % $y    
```
***
