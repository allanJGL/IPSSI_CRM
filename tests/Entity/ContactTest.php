<?php

namespace App\Tests\Entity;

use App\Entity\Contact;
use PHPUnit\Framework\TestCase;

class ContactTest extends TestCase
{
    private $contact;

    public function setUp(): void
    {
        $this->contact = new Contact();
        $this->contact->setFirstname("test");
        $this->contact->setLastname("test");
        $this->contact->setEmail("test@gmail.com");
        $this->contact->setPhoneNumber("0123456789");
        $this->contact->setTag("test");
    }

    public function testIsValid()
    {
//        $this->contact = new Contact();
        $this->assertTrue($this->contact->isValid());
    }

    public function testIsNotValid()
    {
        $this->contact->setEmail("azerty");
        $this->assertFalse($this->contact->isValid());
    }

    public function tearDown(): void
    {
        $this->contact = null;
    }
}
