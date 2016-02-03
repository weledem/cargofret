<?php

namespace Cargofret\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 */
class Client
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nomClient;

    /**
     * @var string
     */
    private $prenomClient;

    /**
     * @var string
     */
    private $adresseClient;

    /**
     * @var string
     */
    private $cpClient;

    /**
     * @var string
     */
    private $villeClient;

    /**
     * @var string
     */
    private $telClient;

    /**
     * @var string
     */
    private $mailClient;

    /**
     * @var \DateTime
     */
    private $dateClient;


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
     * Set nomClient
     *
     * @param string $nomClient
     * @return Client
     */
    public function setNomClient($nomClient)
    {
        $this->nomClient = $nomClient;

        return $this;
    }

    /**
     * Get nomClient
     *
     * @return string 
     */
    public function getNomClient()
    {
        return $this->nomClient;
    }

    /**
     * Set prenomClient
     *
     * @param string $prenomClient
     * @return Client
     */
    public function setPrenomClient($prenomClient)
    {
        $this->prenomClient = $prenomClient;

        return $this;
    }

    /**
     * Get prenomClient
     *
     * @return string 
     */
    public function getPrenomClient()
    {
        return $this->prenomClient;
    }

    /**
     * Set adresseClient
     *
     * @param string $adresseClient
     * @return Client
     */
    public function setAdresseClient($adresseClient)
    {
        $this->adresseClient = $adresseClient;

        return $this;
    }

    /**
     * Get adresseClient
     *
     * @return string 
     */
    public function getAdresseClient()
    {
        return $this->adresseClient;
    }

    /**
     * Set cpClient
     *
     * @param string $cpClient
     * @return Client
     */
    public function setCpClient($cpClient)
    {
        $this->cpClient = $cpClient;

        return $this;
    }

    /**
     * Get cpClient
     *
     * @return string 
     */
    public function getCpClient()
    {
        return $this->cpClient;
    }

    /**
     * Set villeClient
     *
     * @param string $villeClient
     * @return Client
     */
    public function setVilleClient($villeClient)
    {
        $this->villeClient = $villeClient;

        return $this;
    }

    /**
     * Get villeClient
     *
     * @return string 
     */
    public function getVilleClient()
    {
        return $this->villeClient;
    }

    /**
     * Set telClient
     *
     * @param string $telClient
     * @return Client
     */
    public function setTelClient($telClient)
    {
        $this->telClient = $telClient;

        return $this;
    }

    /**
     * Get telClient
     *
     * @return string 
     */
    public function getTelClient()
    {
        return $this->telClient;
    }

    /**
     * Set mailClient
     *
     * @param string $mailClient
     * @return Client
     */
    public function setMailClient($mailClient)
    {
        $this->mailClient = $mailClient;

        return $this;
    }

    /**
     * Get mailClient
     *
     * @return string 
     */
    public function getMailClient()
    {
        return $this->mailClient;
    }

    /**
     * Set dateClient
     *
     * @param \DateTime $dateClient
     * @return Client
     */
    public function setDateClient($dateClient)
    {
        $this->dateClient = $dateClient;

        return $this;
    }

    /**
     * Get dateClient
     *
     * @return \DateTime 
     */
    public function getDateClient()
    {
        return $this->dateClient;
    }
}
