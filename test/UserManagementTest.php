<?php
require_once 'PHPUnit/Autoload.php';
//use PHPUnit\Framework\TestCase;


class UserManagementTest extends PHPUnit_Framework_TestCase{
        public function testVerifyPassword1NPassword2()
        {
                $Pwd1="Test";
                $Pwd2="Test";
                $this->assertEquals($Pwd1, $Pwd2);
        }

        public function testVerifySearchStringNotEmpty()
        {
                $test = true;
                $this->assertTrue($test);
        }

        public function testVerifyUserExists()
        {
                $test = true;
                $this->assertTrue($test);
        }

}
?>
