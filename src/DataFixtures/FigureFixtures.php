<?php

namespace App\DataFixtures;

use App\Entity\Figure;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class FigureFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $figure = new Figure();
        $figure->setName('Mute');
        $figure->setDescription('Saisie de la carre frontside de la planche entre les deux pieds avec la main avant.');
        $figure->setCreatedAt(new \DateTimeImmutable());
        $figure->setUpdatedAt(new \DateTimeImmutable());
        $figure->setSlug('mute');
        $manager->persist($figure);
        $manager->flush();

        $figure = new Figure();
        $figure->setName('Sad');
        $figure->setDescription('Saisie de la carre backside de la planche, entre les deux pieds, avec la main avant.');
        $figure->setCreatedAt(new \DateTimeImmutable());
        $figure->setUpdatedAt(new \DateTimeImmutable());
        $figure->setSlug('sad');
        $manager->persist($figure);
        $manager->flush();

        $figure = new Figure();
        $figure->setName('Indy');
        $figure->setDescription('Saisie de la carre frontside de la planche, entre les deux pieds, avec la main arrière.');
        $figure->setCreatedAt(new \DateTimeImmutable());
        $figure->setUpdatedAt(new \DateTimeImmutable());
        $figure->setSlug('indy');
        $manager->persist($figure);
        $manager->flush();

        $figure = new Figure();
        $figure->setName('360');
        $figure->setDescription('Trois six pour un tour complet.');
        $figure->setCreatedAt(new \DateTimeImmutable());
        $figure->setUpdatedAt(new \DateTimeImmutable());
        $figure->setSlug('360');
        $manager->persist($figure);
        $manager->flush();

        $figure = new Figure();
        $figure->setName('180');
        $figure->setDescription('Un huit pour un demi-tour.');
        $figure->setCreatedAt(new \DateTimeImmutable());
        $figure->setUpdatedAt(new \DateTimeImmutable());
        $figure->setSlug('180');
        $manager->persist($figure);
        $manager->flush();
    }
}
