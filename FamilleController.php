<?php

namespace MyApp\BonobosFriendsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


use MyApp\BonobosFriendsBundle\Entity\Famille;

class FamilleController extends Controller

{
    public function indexAction()
    {
        $em = $this->container->get('doctrine')->getEntityManager();

        $Famille1 = new Famille();
        $Famille1->setNomFamille('Orchide');
        $em->persist($Famille1);

        $Famille2 = new Famille();
        $Famille2->setNomFamille('SingeGeant');
        $em->persist($Famille2);

        $em->flush();  //le commenter apres l'execution pour eviter que l objet se recree

        $message = 'Familles crees avec succes';

        return $this->container->get('templating')->renderResponse
        ('MyAppBonobosFriendsBundle:Famille:famille.html.twig', array('nom_famille' => $nom_famille)
      );
    }
  }
?>
