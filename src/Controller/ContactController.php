<?php
// Dossier virtuel destiné à la classe ContactController
namespace App\Controller;

// On va utiliser la classe abstract controller

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// On va utiliser la classe Response
use Symfony\Component\HttpFoundation\Response;
// On va utiliser la classe Route
use Symfony\Component\Routing\Annotation\Route;


// on créé la classe ContactController qui va hérité de AbstractController
class ContactController extends AbstractController
{
    // Le routeur qui va sur la page contact qui va correspondre 
    // a la fonction index
    /**
     * @Route("/contact", name="app_contact")
     */
    // LA fonction index utilise la méthode render
    // elle renvoie un type Http Response
    public function index(): Response
    {
        $formulaire=$this->createForm(ContactType::class);

        // CREEZ UNE VARIABLE QUE JE VAIS ENVOYE A LA VUE
        $nom="yoel";

        // on va renvoyé une response avec la fonction Render
        // 1 parametre : Lien de la vue
        // 2 parametre : Tableau associatif des données facultatif
      
        return $this->renderForm('contact/index.html.twig',
        ["mavariable"=>$nom,
         "form" =>$formulaire
        ]  
    );
    }
}
