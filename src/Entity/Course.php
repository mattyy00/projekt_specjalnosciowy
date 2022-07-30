<?php

namespace App\Entity;

use App\Repository\CourseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CourseRepository::class)]
class Course
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 50)]
    private $name;

    #[ORM\Column(type: 'integer')]
    private $price;

    #[ORM\OneToMany(mappedBy: 'course', targetEntity: CourseBenefits::class)]
    private $benefits;

    public function __construct()
    {
        $this->benefits = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return Collection<int, CourseBenefits>
     */
    public function getBenefits(): Collection
    {
        return $this->benefits;
    }

    public function addBenefit(CourseBenefits $benefit): self
    {
        if (!$this->benefits->contains($benefit)) {
            $this->benefits[] = $benefit;
            $benefit->setCourse($this);
        }

        return $this;
    }

    public function removeBenefit(CourseBenefits $benefit): self
    {
        if ($this->benefits->removeElement($benefit)) {
            // set the owning side to null (unless already changed)
            if ($benefit->getCourse() === $this) {
                $benefit->setCourse(null);
            }
        }

        return $this;
    }
}
