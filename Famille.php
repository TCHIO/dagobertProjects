<?php
namespace MyApp\BonobosFriendsBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 */
class Famille
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    private $nom_famille;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom_famille
     *
     * @param string $nomFamille
     * @return Famille
     */
    public function setNomFamille($nomFamille)
    {
        $this->nom_famille = $nomFamille;

        return $this;
    }

    /**
     * Get nom_famille
     *
     * @return string
     */
    public function getNomFamille()
    {
        return $this->nom_famille;
    }
}
