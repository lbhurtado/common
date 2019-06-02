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
}