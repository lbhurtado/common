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

	/** @test */
	public function ordinal_works()
    {
        $this->assertEquals('1st', ordinal(1));
        $this->assertEquals('2nd', ordinal(2));
        $this->assertEquals('3rd', ordinal(3));
        $this->assertEquals('4th', ordinal(4));
        $this->assertEquals('5th', ordinal(5));
        $this->assertEquals('6th', ordinal(6));
        $this->assertEquals('7th', ordinal(7));
        $this->assertEquals('8th', ordinal(8));
        $this->assertEquals('9th', ordinal(9));
        $this->assertEquals('10th', ordinal(10));
    }

    /** @test */
    public function tara_works()
    {
        $this->assertEquals('a', tara(1));
        $this->assertEquals('b', tara(2));
        $this->assertEquals('c', tara(3));
        $this->assertEquals('d', tara(4));
        $this->assertEquals('e', tara(5));
        $this->assertEquals('ea', tara(6));
        $this->assertEquals('eb', tara(7));
        $this->assertEquals('ec', tara(8));
        $this->assertEquals('ed', tara(9));
        $this->assertEquals('ee', tara(10));
    }
}
