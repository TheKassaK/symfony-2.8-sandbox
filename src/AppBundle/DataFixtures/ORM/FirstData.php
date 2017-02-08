<?php
namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Article;
use AppBundle\Entity\ArticleDelivery;
use AppBundle\Entity\DeliveryAddress;
use AppBundle\Entity\File;
use AppBundle\Entity\Orders;
use AppBundle\Entity\Package;
use AppBundle\Entity\Pricing;
use AppBundle\Entity\Pricing_Discount;
use AppBundle\Entity\Pricing_Weight;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\User;

class FirstData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $userAdmin = new User();
        $userAdmin->setUsername('admin');
        $userAdmin->setPlainPassword('admin');
        $userAdmin->addRole('ROLE_ADMIN');
        $userAdmin->setEmail('admin@admin.fr');
        $userAdmin->setFirstname('Admin');
        $userAdmin->setLastname('Istrator');
        $userAdmin->setPhone('0677901100');
        $userAdmin->setBirth(new \DateTime("now"));
        $userAdmin->setEnabled(true);

        $manager->persist($userAdmin);

        $user = new User();
        $user->setUsername('user');
        $user->setPlainPassword('user');
        $user->addRole('ROLE_USER');
        $user->setEmail('user@user.fr');
        $user->setFirstname('User');
        $user->setLastname('Istrator');
        $user->setPhone('0677901100');
        $user->setBirth(new \DateTime("now"));
        $user->setEnabled(true);

        $manager->persist($user);

        $manager->flush();
    }
}
