<?php

namespace App\Entity;

use App\Repository\CandidatRepository;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=CandidatRepository::class)
 */
class Candidat
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $postnom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $sexe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $etat_civil;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nationalite;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photo;

    /**
     * @Vich\UploadableField(mapping="candidat", fileNameProperty="photo")
     */
    private $photo_file = null;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $province_origine;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieu_naissance;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_naissance;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $telephone;

    /**
     * @ORM\Column(type="json", nullable=true)
     */
    private $langues = [];

    /**
     * @ORM\Column(type="json", nullable=true)
     */
    private $connaissance_informatique = [];

    /**
     * @ORM\Column(type="json", nullable=true)
     */
    private $experiences_professionnelles = [];

    /**
     * @ORM\Column(type="json", nullable=true)
     */
    private $personnes_references = [];

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="json")
     */
    private $etudes_faites = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPostnom(): ?string
    {
        return $this->postnom;
    }

    public function setPostnom(string $postnom): self
    {
        $this->postnom = $postnom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getEtatCivil(): ?string
    {
        return $this->etat_civil;
    }

    public function setEtatCivil(string $etat_civil): self
    {
        $this->etat_civil = $etat_civil;

        return $this;
    }

    public function getNationalite(): ?string
    {
        return $this->nationalite;
    }

    public function setNationalite(string $nationalite): self
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getProvinceOrigine(): ?string
    {
        return $this->province_origine;
    }

    public function setProvinceOrigine(string $province_origine): self
    {
        $this->province_origine = $province_origine;

        return $this;
    }

    public function getLieuNaissance(): ?string
    {
        return $this->lieu_naissance;
    }

    public function setLieuNaissance(string $lieu_naissance): self
    {
        $this->lieu_naissance = $lieu_naissance;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->date_naissance;
    }

    public function setDateNaissance(\DateTimeInterface $date_naissance): self
    {
        $this->date_naissance = $date_naissance;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getLangues(): ?array
    {
        return $this->langues;
    }

    public function setLangues(?array $langues): self
    {
        $this->langues = $langues;

        return $this;
    }

    public function getConnaissanceInformatique(): ?array
    {
        return $this->connaissance_informatique;
    }

    public function setConnaissanceInformatique(?array $connaissance_informatique): self
    {
        $this->connaissance_informatique = $connaissance_informatique;

        return $this;
    }

    public function getExperiencesProfessionnelles(): ?array
    {
        return $this->experiences_professionnelles;
    }

    public function setExperiencesProfessionnelles(?array $experiences_professionnelles): self
    {
        $this->experiences_professionnelles = $experiences_professionnelles;

        return $this;
    }

    public function getPersonnesReferences(): ?array
    {
        return $this->personnes_references;
    }

    public function setPersonnesReferences(array $personnes_references): self
    {
        $this->personnes_references = $personnes_references;

        return $this;
    }

    /**
     * @return null
     * @author bernard-ng <ngandubernard@gmail.com>
     */
    public function getPhotoFile()
    {
        return $this->photo_file;
    }

    /**
     * @param null $photo_file
     * @author bernard-ng <ngandubernard@gmail.com>
     */
    public function setPhotoFile($photo_file): void
    {
        $this->photo_file = $photo_file;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getEtudesFaites(): ?array
    {
        return $this->etudes_faites;
    }

    public function setEtudesFaites(array $etudes_faites): self
    {
        $this->etudes_faites = $etudes_faites;

        return $this;
    }
}
