<?php

namespace App\Entity;

use App\Repository\JoboffersRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: JoboffersRepository::class)]
class Joboffers
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 50)]
    private $position;

    #[ORM\Column(type: 'string', length: 25)]
    private $city;

    #[ORM\Column(type: 'integer')]
    private $salarymin;

    #[ORM\Column(type: 'integer')]
    private $salarymax;

    #[ORM\Column(type: 'string', length: 25)]
    private $contract;

    #[ORM\Column(type: 'string', length: 20)]
    private $tax;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPosition(): ?string
    {
        return $this->position;
    }

    public function setPosition(string $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getSalarymin(): ?int
    {
        return $this->salarymin;
    }

    public function setSalarymin(int $salarymin): self
    {
        $this->salarymin = $salarymin;

        return $this;
    }

    public function getSalarymax(): ?int
    {
        return $this->salarymax;
    }

    public function setSalarymax(int $salarymax): self
    {
        $this->salarymax = $salarymax;

        return $this;
    }

    public function getContract(): ?string
    {
        return $this->contract;
    }

    public function setContract(string $contract): self
    {
        $this->contract = $contract;

        return $this;
    }

    public function getTax(): ?string
    {
        return $this->tax;
    }

    public function setTax(string $tax): self
    {
        $this->tax = $tax;

        return $this;
    }
}
