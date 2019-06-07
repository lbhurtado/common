<?php

namespace LBHurtado\Common\Tests;

class UtilsTest extends TestCase
{
	/** @test */
	public function validate_mobile_works()
	{
		$this->assertTrue(validate_mobile('+639173011987', 'PH'));
		$this->assertTrue(validate_mobile('+639173011987'));
		$this->assertTrue(validate_mobile('639173011987'));
		$this->assertTrue(validate_mobile('09173011987'));
		$this->assertTrue(validate_mobile('9173011987'));
		$this->assertFalse(validate_mobile('023011987'));
		$this->assertFalse(validate_mobile('3011987'));
	} 

	/** @test */
	public function suffixate_filename_works()
	{
		$this->assertEquals('/www/htdocs/inc/lib.inc-001.php', suffixate_filename('/www/htdocs/inc/lib.inc.php', '001', '-'));
		$this->assertEquals('/www/htdocs/inc/lib.inc002.php', suffixate_filename('/www/htdocs/inc/lib.inc.php', '002'));
		$this->assertEquals('test-003.jpg', suffixate_filename('test.jpg', '003', '-'));
		$this->assertEquals('test004.jpg', suffixate_filename('test.jpg', '004'));
	}
}