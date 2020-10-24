<?php 

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidacionTest extends TestCase
{
	public function test_email()
	{
		$email = Validate::email('dhernandez0032@gmail.com');
		$this->assertTrue($email);

		$email = Validate::email('dhernandez0032@@gmail.com');
		$this->assertFalse($email);
	}

	public function test_url()
	{
		$url = Validate::url('https://platzi.com');
		$this->assertTrue($url);
	}

	public function test_password()
	{
		$password = Validate::password("123456789");
		$this->assertTrue($password);
	}
}