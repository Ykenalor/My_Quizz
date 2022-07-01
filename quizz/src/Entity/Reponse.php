<?php

namespace App\Entity;

use App\Repository\ReponseRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReponseRepository::class)
 */
class Reponse
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
    private $reponse;
    /**
     * @ORM\Column(type="integer")
     */
    private $id_question;
    /**
     * @ORM\Column(type="integer")
     */
    private $reponse_expected;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReponse(): ?string
    {
        return $this->reponse;
    }

    public function setReponse(string $reponse): self
    {
        $this->reponse = $reponse;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdQuestion()
    {
        return $this->id_question;
    }

    /**
     * @param mixed $id_question
     */
    public function setIdQuestion($id_question): void
    {
        $this->id_question = $id_question;
    }

    /**
     * @return mixed
     */
    public function getReponseExpected()
    {
        return $this->reponse_expected;
    }

    /**
     * @param mixed $reponse_expected
     */
    public function setReponseExpected($reponse_expected): void
    {
        $this->reponse_expected = $reponse_expected;
    }
}
