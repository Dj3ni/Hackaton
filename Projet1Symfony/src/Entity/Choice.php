<?php

namespace App\Entity;

use App\Repository\ChoiceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: ChoiceRepository::class)]
#[ApiResource(normalizationContext: ['groups' => ['post:read']], denormalizationContext: ['groups' => ['post:write']])]

class Choice
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['user:read'])]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['post:read', 'post:write', 'user:read'])]
    private ?string $text = null;

/********************** Relations ***********/ 
    /**
     * @var Collection<int, UserChoice>
     */
    #[ORM\OneToMany(targetEntity: UserChoice::class, mappedBy: 'choice')]
    #[Groups(['post:read', 'post:write', 'user:read'])]
    private Collection $userChoices;

    /**
     * @var Collection<int, StoryChoice>
     */
    #[ORM\OneToMany(targetEntity: StoryChoice::class, mappedBy: 'choice')]
    #[Groups(['post:read', 'post:write', 'user:read'])]
    private Collection $storyChoices;

    #[ORM\ManyToOne(inversedBy: 'choices')]
    #[Groups(['post:read', 'post:write', 'user:read'])]
    private ?Ending $ending = null;

    /**
     * @var Collection<int, Dialogs>
     */
    #[ORM\OneToMany(targetEntity: Dialogs::class, mappedBy: 'choice')]
    private Collection $dialogs;

    public function __construct()
    {
        $this->userChoices = new ArrayCollection();
        $this->storyChoices = new ArrayCollection();
        $this->dialogs = new ArrayCollection();
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
     * @return Collection<int, UserChoice>
     */
    public function getUserChoices(): Collection
    {
        return $this->userChoices;
    }

    public function addUserChoice(UserChoice $userChoice): static
    {
        if (!$this->userChoices->contains($userChoice)) {
            $this->userChoices->add($userChoice);
            $userChoice->setChoice($this);
        }

        return $this;
    }

    public function removeUserChoice(UserChoice $userChoice): static
    {
        if ($this->userChoices->removeElement($userChoice)) {
            // set the owning side to null (unless already changed)
            if ($userChoice->getChoice() === $this) {
                $userChoice->setChoice(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, StoryChoice>
     */
    public function getStoryChoices(): Collection
    {
        return $this->storyChoices;
    }

    public function addStoryChoice(StoryChoice $storyChoice): static
    {
        if (!$this->storyChoices->contains($storyChoice)) {
            $this->storyChoices->add($storyChoice);
            $storyChoice->setChoice($this);
        }

        return $this;
    }

    public function removeStoryChoice(StoryChoice $storyChoice): static
    {
        if ($this->storyChoices->removeElement($storyChoice)) {
            // set the owning side to null (unless already changed)
            if ($storyChoice->getChoice() === $this) {
                $storyChoice->setChoice(null);
            }
        }

        return $this;
    }

    public function getEnding(): ?Ending
    {
        return $this->ending;
    }

    public function setEnding(?Ending $ending): static
    {
        $this->ending = $ending;

        return $this;
    }

    /**
     * @return Collection<int, Dialogs>
     */
    public function getDialogs(): Collection
    {
        return $this->dialogs;
    }

    public function addDialog(Dialogs $dialog): static
    {
        if (!$this->dialogs->contains($dialog)) {
            $this->dialogs->add($dialog);
            $dialog->setChoice($this);
        }

        return $this;
    }

    public function removeDialog(Dialogs $dialog): static
    {
        if ($this->dialogs->removeElement($dialog)) {
            // set the owning side to null (unless already changed)
            if ($dialog->getChoice() === $this) {
                $dialog->setChoice(null);
            }
        }

        return $this;
    }

}
