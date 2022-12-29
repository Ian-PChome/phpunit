
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
	
# 為什麼要寫測試?
- 自動化測試
- 測試程式碼的功能
- 偵測是否破壞到其他程式碼
- 給監控工具用

# 開始使用phpunit

Composer:
# composer require --dev phpunit/phpunit

PHP包:
\# wget -O phpunit https://phar.phpunit.de/phpunit-9.phar
# chmod +x phpunit

# HelloWorld Class
class HelloWorld
{
    public string $message;

    public function __construct($string = 'Hello World!')
    {
        $this->message = $string;
    }

    public function sayHello()
    {
        return $this->message;
    }
}
# HelloWorldTest Class
class HelloWorldTest extends TestCase
{
    public function test__construct()
    {
        $hw = new HelloWorld();
        $this->assertEquals(new HelloWorld(), $hw); // 比對Object
        $this->assertNotEquals(new HelloWorld('Hello'), $hw);
    }

    public function testSayHello()
    {
        $hw = new HelloWorld();
        $string = $hw->sayHello();
        $this->assertEquals('Hello World!', $string);
        $this->assertNotEquals('Hello', $string);
    }
}
## 測試HelloWorld Class
# ./phpunit --bootstrap vendor/autoload.php HelloWorldTest.php
# phpunit HelloWorldTest.php
PHPUnit 9.5.26 by Sebastian Bergmann and contributors.

..                                                                  2 / 2 (100%)

Time: 00:00.231, Memory: 4.00 MB

OK (2 tests, 4 assertions)

# 更多測試
- data providers: @dataProvider
- 錯誤(exception): expectException()
- 替身(Doubles): Stubs、Mock Object
- 


# Data Provider
- 提供大量參數
	- array
- 多參數

# CombineTest
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


# 錯誤
- 測試錯誤
 - 是否丟出
 - 是否正確捕捉到

# ErrorTest
class ErrorTest extends TestCase
{
    public function testJsonError()
    {
        $this->expectException(JsonException::class);
        $this->expectExceptionMessage("err");
        throw new JsonException("error");
    }
}


# 測試
PHPUnit 9.5.26 by Sebastian Bergmann and contributors.

.                                                                   1 / 1 (100%)

Time: 00:00.238, Memory: 4.00 MB

OK (1 test, 2 assertions)



## 替身
 - stub object
 - mock object
 
## Stubs
 - 隔離外部影響
  - 很慢的連線(資料庫)
  - 複雜的資源(API)
  
# StubTest
public function testStub()
    {
        $stub = $this->createStub(HelloWorld::class);
        $stub->method('sayHello')
             ->willReturn('bye');

        $this->assertEquals('bye', $stub->sayHello());
    }
	
## 測試StubTest
PHPUnit 9.5.26 by Sebastian Bergmann and contributors.

.                                                                   1 / 1 (100%)

Time: 00:00.557, Memory: 6.00 MB

OK (1 test, 1 assertion)
## Mock
 - 模擬物件
 - 模仿API或行為
 - 測試物件的互動
 
## MockTest

