<?php

namespace App\Entity;

use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\Post;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
use App\Repository\StoryChoiceRepository;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: StoryChoiceRepository::class)]
#[ApiResource(normalizationContext: ['groups' => ['user:read']], denormalizationContext: ['groups' => ['user:write']])]


class StoryChoice
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['user:read'])]
    private ?int $id = null;
    
/********************** Relations ***********/ 
    #[ORM\ManyToOne(inversedBy: 'storyChoices')]
    #[ApiResource(normalizationContext: ['groups' => ['post:read']], denormalizationContext: ['groups' => ['post:write']])]

    private ?Choice $choice = null;

    #[ORM\ManyToOne(inversedBy: 'storyChoices')]
    #[Groups(['post:read', 'post:write', 'user:read'])]
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
