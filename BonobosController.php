<?php
namespace MyApp\BonobosFriendsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MyApp\BonobosFriendsBundle\Entity\Bonobos;
use MyApp\BonobosFriendsBundle\Form\FormBonobos;

class BonobosController extends Controller
{

        $em = $this->container->get('doctrine')->getEntityManager();

        $acteurs= $em->getRepository('MyAppBonobosFriendsBundle:Bonobos')->findAll();

        return $this->container->get('templating')->renderResponse('MyAppBonobosFriendsBundle:Bonobos:lister.html.twig',
        array(
        'Bonobos' => $Bonobos
        ));
}


    public function editerAction($id = null)
 {
         $message='';
         $em = $this->container->get('doctrine')->getEntityManager();

         if (isset($id))
         {
                 // modification d'un bonobos existant : on recherche ses données
                 $bonobos = $em->find('MyAppBonobosFriendsBundle:Bonobos', $id);

                 if (!$bonobos)
                 {
                         $message='Aucun acteur trouvé';
                 }
         }
         else
         {
                 // ajout d'un nouvel bonobos
                 $bonobos = new Bonobos();
         }

         $form = $this->container->get('form.factory')->create(new FormBonobos(), $bonobos);

         $request = $this->container->get('request');

         if ($request->getMethod() == 'POST')
         {
                 $form->bindRequest($request);

         if ($form->isValid())
         {
                 $em->persist($bonobos);
                 $em->flush();
                 if (isset($id))
                 {
                         $message='Bonobos modifié avec succès !';
                 }
                 else
                 {
                         $message='Bonobos ajouté avec succès !';
                 }
         }
         }

         return $this->container->get('templating')->renderResponse(
 'MMyAppBonobosFriendsBundle:Bonobos:editer.html.twig',
         array(
         'form' => $form->createView(),
         'message' => $message,
         ));
 }

    public function supprimerAction($id)
    {

      $em = $this->container->get('doctrine')->getEntityManager();
    $bonobos = $em->find('MyAppBonobosFriendsBundle:Bonobos', $id);

    if (!$bonobos)
    {
      throw new NotFoundHttpException("bonobos non trouvé");
    }

    $em->remove($bonobos);
    $em->flush();


    return new RedirectResponse($this->container->get('router')->generate('myapp_bonobo_lister'));
  }


 ?>
