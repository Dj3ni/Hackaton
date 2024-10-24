<?php

namespace App\Entity;

use App\Repository\StoryChoiceRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;

#[ORM\Entity(repositoryClass: StoryChoiceRepository::class)]
#[ApiResource]
class StoryChoice
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    
/********************** Relations ***********/ 
    #[ORM\ManyToOne(inversedBy: 'storyChoices')]
    private ?Choice $choice = null;

    #[ORM\ManyToOne(inversedBy: 'storyChoices')]
    private ?StoryNode $storyNode = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getChoice(): ?Choice
    {
        return $this->choice;
    }

    public function setChoice(?Choice $choice): static
    {
        $this->choice = $choice;

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
