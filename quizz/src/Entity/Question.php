<?php

namespace App\Entity;

use App\Controller\QuestionController;
use App\Repository\QuestionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=QuestionRepository::class)
 */
class Question extends QuestionController
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_categorie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $question;

    private $toto;
    /**
     * @return mixed
     */
    public function getToto()
    {
        return $this->toto;
    }

    /**
     * @param mixed $toto
     */
    public function setToto($toto): void
    {
        $this->toto = $toto;
    }

    public function ok(){
        return $this->getToto();
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCategorie(): ?int
    {
        return $this->id_categorie;
    }

    public function setIdCategorie(int $id_categorie): self
    {
        $this->id_categorie = $id_categorie;

        return $this;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(string $question): self
    {
        $this->question = $question;

        return $this;
    }

}
