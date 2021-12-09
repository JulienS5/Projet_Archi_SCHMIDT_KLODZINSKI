<?php

namespace App\Entity;

use App\Repository\DemandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DemandeRepository::class)
 */
class Demande
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Sujet;

    /**
     * @ORM\Column(type="array")
     */
    private $Piece = [];

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Type;

    /**
     * @ORM\Column(type="text")
     */
    private $Description;

    /**
     * @ORM\Column(type="boolean", options={"default": false})
     */
    private $estPris;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mailEtudiant;

    public function __construct()
    {
        $this->res = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSujet(): ?string
    {
        return $this->Sujet;
    }

    public function setSujet(string $Sujet): self
    {
        $this->Sujet = $Sujet;

        return $this;
    }

    public function getPiece(): ?array
    {
        return $this->Piece;
    }

    public function setPiece(array $Piece): self
    {
        $this->Piece = $Piece;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->Type;
    }

    public function setType(string $Type): self
    {
        $this->Type = $Type;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getEstPris(): ?bool
    {
        return $this->estPris;
    }

    public function setEstPris(bool $estPris): self
    {
        $this->estPris = $estPris;

        return $this;
    }

    public function getMailEtudiant(): ?string
    {
        return $this->mailEtudiant;
    }

    public function setMailEtudiant(string $mailEtudiant): self
    {
        $this->mailEtudiant = $mailEtudiant;

        return $this;
    }
}
