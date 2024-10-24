<?php

namespace App\Entity;

use App\Repository\AssetRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;

#[ORM\Entity(repositoryClass: AssetRepository::class)]
#[ApiResource]
class Asset
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $type = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $filepath = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $choiceCondition = null;

   /********************** Relations ***********/ 
    /**
     * @var Collection<int, AssetStory>
     */
    #[ORM\OneToMany(targetEntity: AssetStory::class, mappedBy: 'asset')]
    private Collection $stories;

    #[ORM\ManyToOne(inversedBy: 'assets')]
    private ?Character $perso = null;
    

    public function __construct()
    {
        $this->stories = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getFilepath(): ?string
    {
        return $this->filepath;
    }

    public function setFilepath(?string $filepath): static
    {
        $this->filepath = $filepath;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getChoiceCondition(): ?string
    {
        return $this->choiceCondition;
    }

    public function setChoiceCondition(?string $choiceCondition): static
    {
        $this->choiceCondition = $choiceCondition;

        return $this;
    }

    /**
     * @return Collection<int, AssetStory>
     */
    public function getStories(): Collection
    {
        return $this->stories;
    }

    public function addStory(AssetStory $story): static
    {
        if (!$this->stories->contains($story)) {
            $this->stories->add($story);
            $story->setAsset($this);
        }

        return $this;
    }

    public function removeStory(AssetStory $story): static
    {
        if ($this->stories->removeElement($story)) {
            // set the owning side to null (unless already changed)
            if ($story->getAsset() === $this) {
                $story->setAsset(null);
            }
        }

        return $this;
    }

    public function getPerso(): ?Character
    {
        return $this->perso;
    }

    public function setPerso(?Character $perso): static
    {
        $this->perso = $perso;

        return $this;
    }
}
