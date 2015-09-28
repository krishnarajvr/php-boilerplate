<?php
use Impelsys\DemoLib\Auth\UserAuthService;

class UserAuthTest extends \PHPUnit_Framework_TestCase {
	/**
	 * @dataProvider loginProvider
	 */
	public function testSomething($userName, $password, $id) {

		$db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
		$auth = new UserAuthService($db);

		$this->assertEquals($auth->login($userName, $password), $id);
	}

	public function loginProvider() {
		return array(
			array('test@abc.com', 'test123', 1),
			array('test@abc.com', '', false),
			array('', 'test123', false),
		);
	}

}
