<?php

namespace App\Entity;

use App\Repository\QuestionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=QuestionRepository::class)
 */
class Question
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
    private $question;

    private $id_categorie;

    public function setId($id): void
    {
        $this->id = $id;
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function setQuestion(string $question): self
    {
        $this->question = $question;

        return $this;
    }
    public function getQuestion(): ?string
    {
        return $this->question;
    }


    /**
     * @return mixed
     */
    public function getIdCategorie()
    {
        return $this->id_categorie;
    }

    /**
     * @param mixed $id_categorie
     */
    public function setIdCategorie($id_categorie): void
    {
        $this->id_categorie = $id_categorie;
    }

    /**
     * @param mixed $id
     */

}
