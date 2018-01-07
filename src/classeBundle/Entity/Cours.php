<?php

namespace classeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cours
 *
 * @ORM\Table(name="cours")
 * @ORM\Entity(repositoryClass="classeBundle\Repository\CoursRepository")
 */
class Cours
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="places", type="integer")
     */
    private $places;

    /**
     * @var Intervant
     *
     * @ORM\Column(name="id_Intervenant", type="Intervant")
     */
    private $intervenant;
    /**
     * Get Intervant
     *
     * @return Intervant
     */
    public function getIntervenant()
    {
        return $this->intervenant;
    }

    /**
     * Set Intervenant
     *
     * @param Intervenant $prof
     *
     * @return Intervenant
     */
    public function setIntervenant($intervenant)
    {
        $this->intervenant = $intervenant;

        return $this;
    }



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set places
     *
     * @param integer $places
     *
     * @return Cours
     */
    public function setPlaces($places)
    {
        $this->places = $places;

        return $this;
    }

    /**
     * Get places
     *
     * @return int
     */
    public function getPlaces()
    {
        return $this->places;
    }
}
