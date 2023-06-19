<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $user = new User();
        $user->setEmail('admin@admin.fr');
        $user->setPassword('admin');
        $user->setRoles(['ROLE_ADMIN']);
        $user->setIsVerified(true);
        $user->setPseudo('admin');
        $manager->persist($user);
        $manager->flush();

        $user = new User();
        $user->setEmail('user@test.fr');
        $user->setPassword('user');
        $user->setRoles(['ROLE_USER']);
        $user->setIsVerified(true);
        $user->setPseudo('MichMich');
        $manager->persist($user);
        $manager->flush();

        $user = new User();
        $user->setEmail('user2@test.fr');
        $user->setPassword('user2');
        $user->setRoles(['ROLE_USER']);
        $user->setIsVerified(true);
        $user->setPseudo('LeRoiDuSnow');
        $manager->persist($user);
        $manager->flush();
    }
}
