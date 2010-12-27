<?php

require_once '../src/Mail/Address/MobileJp.php';

/**
 * Test class for Mail_Address_MobileJp.
 * Generated by PHPUnit on 2010-12-28 at 00:31:46.
 */
class Mail_Address_MobileJpTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Mail_Address_MobileJp
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = Mail_Address_MobileJp::getInstance();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    public function testIsMobileJp()
    {
        $this->assertTrue($this->object->isMobileJp('.foobar@docomo.ne.jp'));

        $this->assertFalse($this->object->isMobileJp('foobar@example.com'));
        $this->assertFalse($this->object->isMobileJp('foobar@willcom.ne.jp'));
        $this->assertTrue($this->object->isMobileJp('foobar@willcom.com'));
    }

    public function testIsImode()
    {
        $this->assertTrue($this->object->isImode('foobar@docomo.ne.jp'));
        $this->assertTrue($this->object->isImode('foobar.@docomo.ne.jp'));
        $this->assertTrue($this->object->isImode('foobar..@docomo.ne.jp'));
        $this->assertTrue($this->object->isImode('foobar...@docomo.ne.jp'));
        $this->assertTrue($this->object->isImode('foo.bar@docomo.ne.jp'));
        $this->assertTrue($this->object->isImode('foo..bar@docomo.ne.jp'));
        $this->assertTrue($this->object->isImode('foo...bar@docomo.ne.jp'));
        $this->assertFalse($this->object->isImode('foobar@ezweb.ne.jp'));
        $this->assertFalse($this->object->isImode('foobar@softbank.ne.jp'));
        $this->assertFalse($this->object->isImode('foobar@disney.ne.jp'));
        $this->assertFalse($this->object->isImode('foobar@d.vodafone.ne.jp'));
    }

    public function testIsEzweb()
    {
        $this->assertTrue($this->object->isEzweb('foobar@ezweb.ne.jp'));
        $this->assertTrue($this->object->isEzweb('foobar.@ezweb.ne.jp'));
        $this->assertTrue($this->object->isEzweb('foobar..@ezweb.ne.jp'));
        $this->assertTrue($this->object->isEzweb('foobar...@ezweb.ne.jp'));
        $this->assertTrue($this->object->isEzweb('foo.bar@ezweb.ne.jp'));
        $this->assertTrue($this->object->isEzweb('foo..bar@ezweb.ne.jp'));
        $this->assertTrue($this->object->isEzweb('foo...bar@ezweb.ne.jp'));
        $this->assertFalse($this->object->isEzweb('foobar@docomo.ne.jp'));
        $this->assertFalse($this->object->isEzweb('foobar@softbank.ne.jp'));
        $this->assertFalse($this->object->isEzweb('foobar@disney.ne.jp'));
        $this->assertFalse($this->object->isEzweb('foobar@d.vodafone.ne.jp'));
    }

    public function testIsSoftbank()
    {
        $this->assertTrue($this->object->isSoftbank('foobar@softbank.ne.jp'));
        $this->assertTrue($this->object->isSoftbank('foobar@disney.ne.jp'));
        $this->assertTrue($this->object->isSoftbank('foobar@d.vodafone.ne.jp'));
        $this->assertFalse($this->object->isSoftbank('foobar@docomo.ne.jp'));
        $this->assertFalse($this->object->isSoftbank('foobar@ezweb.ne.jp'));
    }
}
?>