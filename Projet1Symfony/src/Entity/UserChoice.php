<?php

namespace App\Entity;

use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\Post;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
use App\Repository\UserChoiceRepository;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: UserChoiceRepository::class)]
#[ApiResource(normalizationContext: ['groups' => ['user:read']], denormalizationContext: ['groups' => ['user:write']])]


class UserChoice
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['user:read'])]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    #[Groups(['post:read', 'post:write', 'user:read'])]
    private ?\DateTimeInterface $timestamp = null;

    #[ORM\ManyToOne(inversedBy: 'choices')]
    #[Groups(['post:read', 'post:write', 'user:read'])]
    private ?User $user = null;

    #[ORM\ManyToOne(inversedBy: 'userChoices')]
    #[Groups(['post:read', 'post:write', 'user:read'])]
    private ?Choice $choice = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTimestamp(): ?\DateTimeInterface
    {
        return $this->timestamp;
    }

    public function setTimestamp(?\DateTimeInterface $timestamp): static
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

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
}
