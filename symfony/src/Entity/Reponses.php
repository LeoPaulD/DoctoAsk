<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ReponsesRepository")
 */
class Reponses
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $contenu;

    /**
     * @var \Questions
     * 
     * @ORM\OneToOne(targetEntity="Questions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idQuestion", referencedColumnName="id")
     * })
     */
    private $idQuestion;
    
    /**
     * @var \User
     * 
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idMedecin", referencedColumnName="id")
     * })
     */
    private $idMedecin;
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getIdQuestion(): ?int
    {
        return $this->idQuestion->getId();
    }

    public function setIdQuestion($idQuestion): self
    {
        $this->idQuestion = $idQuestion;

        return $this;
    }
    public function getIdMedecin(): ?int
    {
        return $this->idMedecin;
    }

    public function setIdMedecin($idMedecin): self
    {
        $this->idMedecin = $idMedecin;

        return $this;
    }
}