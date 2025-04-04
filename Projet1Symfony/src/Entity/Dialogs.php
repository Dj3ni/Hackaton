<?php

namespace App\Entity;

use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\Post;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;

use App\Repository\DialogsRepository;
use Symfony\Component\Serializer\Annotation\Groups;
#[ORM\Entity(repositoryClass: DialogsRepository::class)]
#[ApiResource(normalizationContext: ['groups' => ['user:read']], denormalizationContext: ['groups' => ['user:write']])]


class Dialogs
{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['user:read'])]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    #[Groups(['post:read', 'post:write', 'user:read'])]
    private ?string $text = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['post:read', 'post:write', 'user:read'])]
    private ?string $state = null;
    
/********************** Relations ***********/ 

        /**
         * @MaxDepth(1)
         */
        private $Choice;
        private $StoryNode;
        private $Perso;

    #[ORM\ManyToOne(inversedBy: 'dialogs')]
    #[Groups(['post:read'])]
    private ?Choice $choice = null;
 

    

    #[ORM\ManyToOne(inversedBy: 'dialogs')]
    #[Groups(['post:read'])]
    private ?StoryNode $storyNode = null;

    #[ORM\ManyToOne(inversedBy: 'dialogs')]
    #[Groups(['post:read'])]
    private ?Character $perso = null;

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

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): static
    {
        $this->state = $state;

        return $this;
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
