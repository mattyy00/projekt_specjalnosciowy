<?php

namespace App\Entity;

use App\Repository\SignupRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SignupRepository::class)]
class Signup
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 20)]
    private $name1;

    #[ORM\Column(type: 'string', length: 25)]
    private $name2;

    #[ORM\Column(type: 'string', length: 50)]
    private $e_mail;

    #[ORM\Column(type: 'integer')]
    private $phone;

    #[ORM\Column(type: 'string', length: 50)]
    private $course;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName1(): ?string
    {
        return $this->name1;
    }

    public function setName1(string $name1): self
    {
        $this->name1 = $name1;

        return $this;
    }

    public function getName2(): ?string
    {
        return $this->name2;
    }

    public function setName2(string $name2): self
    {
        $this->name2 = $name2;

        return $this;
    }

    public function getEMail(): ?string
    {
        return $this->e_mail;
    }

    public function setEMail(string $e_mail): self
    {
        $this->e_mail = $e_mail;

        return $this;
    }

    public function getPhone(): ?int
    {
        return $this->phone;
    }

    public function setPhone(int $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getCourse(): ?string
    {
        return $this->course;
    }

    public function setCourse(string $course): self
    {
        $this->course = $course;

        return $this;
    }
}
