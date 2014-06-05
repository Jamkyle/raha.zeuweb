<?php

namespace Raha\HomeBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Raha\HomeBundle\Entity\Article;
use Application\Sonata\MediaBundle\Entity\Media;
use Sonata\MediaBundle\Model\MediaInterface;

class RahaFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {

    $media = new Media;
    $media->setProviderName('sonata.media.provider.image');
    $media->setContext('default');
    $media->setBinaryContent('C:\Users\aro\wamp\www\raha.zeuweb\web\images\sources.jpg');

    $media2 = new Media;
    $media2->setProviderName('sonata.media.provider.youtube');
    $media2->setContext('default');
    $media2->setBinaryContent('http://www.youtube.com/watch?v=ayeAcSDWYww');

		$blog1 = new Article();
		$blog1->setTitre('Poste d une photo');
		$blog1->setContenu('Lorem ipsum dolor sit d us imperdiet justo scelerisque. Nulla consectetur...');
		$blog1->setMedia($media);
		$blog1->setAuteur('Jstyle');
		$blog1->setTags('symfony2, php, paradise, photo');
		$manager->persist($blog1);

		$blog2 = new Article();
		$blog2->setTitre('Voila une petite video de Anaya');
		$blog2->setContenu('Lorem ipsum dolor sit d us imperdiet justo scelerisque. Nulla consectetur...');
		$blog2->setMedia($media2);
		$blog2->setAuteur('dsyph3r');
		$blog2->setTags('symfony2, php, paradise, video');
		$manager->persist($blog2);

		$manager->flush();

        $this->addReference('article1', $blog1);
        $this->addReference('article2', $blog2);
    }

    public function getOrder()
    {
        return 1;
    }
}