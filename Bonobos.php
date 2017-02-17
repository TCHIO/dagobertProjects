<?php
namespace MyApp\BonobosFriendsBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 */
 class Bonobos
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank()
     */
    private $age;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     * @Assert\Choice(choices = {"Chimpanze", "Gorille"})
     */
    private $race;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     * @Assert\Choice(choices = {"Riz","Banane", "Croquette"})
     */
    private $Nourriture;

    /**
     * @ORM\ManyToOne(targetEntity="Famille")
     * @Assert\NotBlank()
     */
    private $famille;


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
     * Set age
     *
     * @param integer $age
     * @return Bonobos
     */
    public function setAge($age)
    {
        $this->age = $age;
    
        return $this;
    }

    /**
     * Get age
     *
     * @return integer 
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set race
     *
     * @param string $race
     * @return Bonobos
     */
    public function setRace($race)
    {
        $this->race = $race;
    
        return $this;
    }

    /**
     * Get race
     *
     * @return string 
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set Nourriture
     *
     * @param string $nourriture
     * @return Bonobos
     */
    public function setNourriture($nourriture)
    {
        $this->Nourriture = $nourriture;
    
        return $this;
    }

    /**
     * Get Nourriture
     *
     * @return string 
     */
    public function getNourriture()
    {
        return $this->Nourriture;
    }

    /**
     * Set famille
     *
     * @param \MyApp\BonobosFriendsBundle\Entity\Famille $famille
     * @return Bonobos
     */
    public function setFamille(\MyApp\BonobosFriendsBundle\Entity\Famille $famille = null)
    {
        $this->famille = $famille;
    
        return $this;
    }

    /**
     * Get famille
     *
     * @return \MyApp\BonobosFriendsBundle\Entity\Famille 
     */
    public function getFamille()
    {
        return $this->famille;
    }
}