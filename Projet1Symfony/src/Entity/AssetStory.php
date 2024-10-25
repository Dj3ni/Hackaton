<?php

namespace App\Entity;

use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\Post;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
use App\Repository\AssetStoryRepository;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: AssetStoryRepository::class)]
#[ApiResource(normalizationContext: ['groups' => ['user:read']], denormalizationContext: ['groups' => ['user:write']])]

class AssetStory
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['user:read'])]
    private ?int $id = null;

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
