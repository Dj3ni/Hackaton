<?php

namespace App\Entity;

use App\Repository\AssetStoryRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: AssetStoryRepository::class)]
#[ApiResource(normalizationContext: ['groups' => ['post:read']], denormalizationContext: ['groups' => ['post:write']])]

class AssetStory
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['user:read'])]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['post:read', 'post:write', 'user:read'])]
    private ?string $type = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['post:read', 'post:write', 'user:read'])]
    private ?string $path = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Groups(['post:read', 'post:write', 'user:read'])]
    private ?string $description = null;

    /********************** Relations ***********/ 

    #[ORM\ManyToOne(inversedBy: 'assetsStories')]
    #[Groups(['post:read', 'post:write', 'user:read'])]
    private ?StoryNode $storyNode = null;

    #[ORM\ManyToOne(inversedBy: 'stories')]
    #[Groups(['post:read', 'post:write', 'user:read'])]
    private ?Asset $asset = null;

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

    // public function getPath(): ?string
    // {
    //     return $this->path;
    // }

    // public function setPath(?string $path): static
    // {
    //     $this->path = $path;

    //     return $this;
    // }

    // public function getDescription(): ?string
    // {
    //     return $this->description;
    // }

    // public function setDescription(string $description): static
    // {
    //     $this->description = $description;

    //     return $this;
    // }

    public function getStoryNode(): ?StoryNode
    {
        return $this->storyNode;
    }

    public function setStoryNode(?StoryNode $storyNode): static
    {
        $this->storyNode = $storyNode;

        return $this;
    }

    public function getAsset(): ?Asset
    {
        return $this->asset;
    }

    public function setAsset(?Asset $asset): static
    {
        $this->asset = $asset;

        return $this;
    }
}
