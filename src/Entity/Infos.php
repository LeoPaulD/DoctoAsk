<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InfosRepository")
 */
class Infos
{

     /**
       * @var \User
       *
       * @ORM\Id
       * @ORM\GeneratedValue(strategy="NONE")
       * @ORM\OneToOne(targetEntity="User")
       * @ORM\JoinColumns({
       *   @ORM\JoinColumn(name="idMedecin", referencedColumnName="id")
       * })
       */
      private $idMedecin;

      /**
       * @ORM\Column(type="boolean", options={"default" : 0})
       */
      private $photo = 0;

      /**
       * @ORM\Column(type="string", length=255, nullable=true)
       */
      private $presentation;

      /**
       * @ORM\Column(type="string", length=255, nullable=true)
       */
      private $horaires;

      /**
       * @ORM\Column(type="integer", nullable=true)
       */
      private $tarif;

      /**
       * @ORM\Column(type="integer", nullable=true)
       */
      private $convention;

      /**
       * @ORM\Column(type="boolean", nullable=true)
       */
      private $carte_vitale;

      /**
       * @ORM\Column(type="boolean", nullable=true)
       */
      private $cb;

      /**
       * @ORM\Column(type="boolean", nullable=true)
       */
      private $cheque;

      /**
       * @ORM\Column(type="boolean", nullable=true)
       */
      private $espece;

      /**
       * @ORM\Column(type="string", length=50, nullable=true)
       */
      private $rue_cabinet;

      /**
       * @ORM\Column(type="string", length=50, nullable=true)
       */
      private $ville_cabinet;


      /**
       * @ORM\Column(type="integer", length=5, nullable=true)
       */
      private $code_postal;

      /**
       * @ORM\Column(type="string", length=50, nullable=true)
       */
      private $pays_cabinet;

      public function getIdMedecin(): ?int
      {
          return $this->idMedecin->getId();
      }

      public function setIdMedecin($idMedecin): self
      {
          $this->idMedecin = $idMedecin;

          return $this;
      }

      public function getPhoto(): ?bool
      {
          return $this->photo;
      }

      public function setPhoto(?bool $photo): self
      {
          $this->photo = $photo;

          return $this;
      }

      public function getPresentation(): ?string
      {
          return $this->presentation;
      }

      public function setPresentation(?string $presentation): self
      {
          $this->presentation = $presentation;

          return $this;
      }

      public function getHoraires(): ?string
      {
          return $this->horaires;
      }

      public function setHoraires(string $horaires): self
      {
          $this->horaires = $horaires;

          return $this;
      }

      public function getTarif(): ?int
      {
          return $this->tarif;
      }

      public function setTarif(int $tarif): self
      {
          $this->tarif = $tarif;

          return $this;
      }

      public function getConvention(): ?int
      {
          return $this->convention;
      }

      public function setConvention(int $convention): self
      {
          $this->convention = $convention;

          return $this;
      }

      public function getCarteVitale(): ?bool
      {
          return $this->carte_vitale;
      }

      public function setCarteVitale(bool $carte_vitale): self
      {
          $this->carte_vitale = $carte_vitale;

          return $this;
      }

      public function getCb(): ?bool
      {
          return $this->cb;
      }

      public function setCb(bool $cb): self
      {
          $this->cb = $cb;

          return $this;
      }

      public function getCheque(): ?bool
      {
          return $this->cheque;
      }

      public function setCheque(bool $cheque): self
      {
          $this->cheque = $cheque;

          return $this;
      }

      public function getEspece(): ?bool
      {
          return $this->espece;
      }

      public function setEspece(bool $espece): self
      {
          $this->espece = $espece;

          return $this;
      }

      public function getRueCabinet(): ?string
      {
          return $this->rue_cabinet;
      }

      public function setRueCabinet(string $rue_cabinet): self
      {
          $this->rue_cabinet = $rue_cabinet;

          return $this;
      }

      public function getVilleCabinet(): ?string
      {
          return $this->ville_cabinet;
      }

      public function setVilleCabinet(string $ville_cabinet): self
      {
          $this->ville_cabinet = $ville_cabinet;

          return $this;
      }

      public function getCodePostal(): ?int
      {
          return $this->code_postal;
      }

      public function setCodePostal(int $code_postal): self
      {
          $this->code_postal = $code_postal;

          return $this;
      }

      public function getPaysCabinet(): ?string
      {
          return $this->pays_cabinet;
      }

      public function setPaysCabinet(string $pays_cabinet): self
      {
          $this->pays_cabinet = $pays_cabinet;

          return $this;
      }
}
