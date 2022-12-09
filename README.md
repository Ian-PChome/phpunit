
# PHP單元測試

# 什麼是單元測是?
"是針對軟體設計的最小單位來進行正確性檢驗的測試工作"

# 所以什麼是單元測試?
- 單元:最小可以測試的程式碼
	- 程序:function或程序
	- 物件導向:一個方法(method)

- 測試:寫code檢查你的code
	- 預期的結果
	- 非預期的錯誤
	
# 為什麼要做測試?
- 自動化測試
- 測試程式碼的功能
- 偵測是否破壞到其他程式碼



開始吧

# 安裝phpunit
Composer:
# composer require --dev phpunit/phpunit

PHP包:
\# wget -O phpunit https://phar.phpunit.de/phpunit-9.phar
# chmod +x phpunit

# HelloWorld Class

# HelloWorldTest Class

測試HelloWorld Class
# ./phpunit --bootstrap vendor/autoload.php HelloWorldTest.php
# phpunit HelloWorldTest.php
PHPUnit 9.5.26 by Sebastian Bergmann and contributors.

..                                                                  2 / 2 (100%)

Time: 00:00.013, Memory: 20.00 MB

OK (2 tests, 5 assertions)

# 更多測試
- data providers @dataProvider
- 錯誤(exception): @expectedException
- 替身(doubles): mocks
- 


# Data Provider
- 提供大量參數
	- array
- 
# 測試Combine

# phpunit CombineTest.php
PHPUnit 9.5.26 by Sebastian Bergmann and contributors.

..F                                                                 3 / 3 (100%)

Time: 00:00.241, Memory: 4.00 MB

There was 1 failure:

1) CombineTest::testCombine with data set #2 ('This', 'Fail', 'This success')
Failed asserting that two strings are equal.
--- Expected
+++ Actual
@@ @@
-'This success'
+'This Fail'

/var/www/phpunit/CombineTest.php:12
phpvfscomposer:///var/www/phpunit/vendor/phpunit/phpunit/phpunit:97

FAILURES!
Tests: 3, Assertions: 3, Failures: 1.


# Exception

# ErrorTest

# 測試
# phpunit ErrorTest.php
PHPUnit 9.5.26 by Sebastian Bergmann and contributors.

.                                                                   1 / 1 (100%)

Time: 00:00.202, Memory: 4.00 MB

OK (1 test, 1 assertion)



# 替身
 - stub object
 - mock object
 
- mock
 - 模擬物件
