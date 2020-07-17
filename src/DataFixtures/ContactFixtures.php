<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Contact;

class ContactFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $contact = new Contact();
        $contact->setFirstname("test");
        $contact->setLastname("test");
        $contact->setEmail('Ok, I guess it *does* have a price');
        $contact->setPhoneNumber("0123456789");
        $contact->setTag('test');
        $manager->persist($contact);

        $manager->flush();
    }
}
