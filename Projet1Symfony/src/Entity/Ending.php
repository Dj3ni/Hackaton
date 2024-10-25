<?php

namespace App\Entity;

use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\Post;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\EndingRepository;
use ApiPlatform\Metadata\ApiResource;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
#[ORM\Entity(repositoryClass: EndingRepository::class)]
#[ApiResource(normalizationContext: ['groups' => ['user:read']], denormalizationContext: ['groups' => ['user:write']])]


class Ending
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['user:read'])]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    #[Groups(['post:read', 'post:write', 'user:read'])]
    private ?string $text = null;
    
/********************** Relations ***********/ 
    /**
     * @var Collection<int, Choice>
     */
    #[ORM\OneToMany(targetEntity: Choice::class, mappedBy: 'ending')]
    #[Groups(['post:read', 'post:write', 'user:read'])]
    private Collection $choices;

    #[ORM\ManyToOne(inversedBy: 'endings')]
    #[Groups(['post:read', 'post:write', 'user:read'])]
    private ?StoryNode $storyNode = null;

    public function __construct()
    {
        $this->choices = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): static
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @return Collection<int, Choice>
     */
    public function getChoices(): Collection
    {
        return $this->choices;
    }

    public function addChoice(Choice $choice): static
    {
        if (!$this->choices->contains($choice)) {
            $this->choices->add($choice);
            $choice->setEnding($this);
        }

        return $this;
    }

    public function removeChoice(Choice $choice): static
    {
        if ($this->choices->removeElement($choice)) {
            // set the owning side to null (unless already changed)
            if ($choice->getEnding() === $this) {
                $choice->setEnding(null);
            }
        }

        return $this;
    }

    public function getStoryNode(): ?StoryNode
    {
        return $this->storyNode;
    }

    public function setStoryNode(?StoryNode $storyNode): static
    {
        $this->storyNode = $storyNode;

        return $this;
    }
}
