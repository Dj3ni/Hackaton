<?php

namespace App\Entity;

use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\Post;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
use App\Repository\StoryNodeRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;


#[ORM\Entity(repositoryClass: StoryNodeRepository::class)]
#[ApiResource(normalizationContext: ['groups' => ['user:read']], denormalizationContext: ['groups' => ['user:write']])]



class StoryNode
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['post:read', 'post:write'])]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['post:read', 'post:write', 'user:read'])]
    private ?string $title = null;

    /********************** Relations ***********/ 
    /**
     * @var Collection<int, StoryChoice>
     */
    #[ORM\OneToMany(targetEntity: StoryChoice::class, mappedBy: 'storyNode')]
    #[Groups(['post:read', 'post:write', 'user:read'])]
    private Collection $storyChoices;

    /**
     * @var Collection<int, Ending>
     */
    #[ORM\OneToMany(targetEntity: Ending::class, mappedBy: 'storyNode')]
    #[Groups(['post:read', 'post:write', 'user:read'])]
    private Collection $endings;

    /**
     * @var Collection<int, Dialogs>
     */
    #[ORM\OneToMany(targetEntity: Dialogs::class, mappedBy: 'storyNode')]
    #[Groups(['post:read', 'post:write', 'user:read'])]
    private Collection $dialogs;

    /**
     * @var Collection<int, AssetStory>
     */
    #[ORM\OneToMany(targetEntity: AssetStory::class, mappedBy: 'storyNode')]
    #[Groups(['post:read', 'post:write', 'user:read'])]
    private Collection $assetsStories;

    public function __construct()
    {
        $this->storyChoices = new ArrayCollection();
        $this->endings = new ArrayCollection();
        $this->dialogs = new ArrayCollection();
        $this->assetsStories = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): static
    {
        $this->title = $title;

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
            $storyChoice->setStoryNode($this);
        }

        return $this;
    }

    public function removeStoryChoice(StoryChoice $storyChoice): static
    {
        if ($this->storyChoices->removeElement($storyChoice)) {
            // set the owning side to null (unless already changed)
            if ($storyChoice->getStoryNode() === $this) {
                $storyChoice->setStoryNode(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Ending>
     */
    public function getEndings(): Collection
    {
        return $this->endings;
    }

    public function addEnding(Ending $ending): static
    {
        if (!$this->endings->contains($ending)) {
            $this->endings->add($ending);
            $ending->setStoryNode($this);
        }

        return $this;
    }

    public function removeEnding(Ending $ending): static
    {
        if ($this->endings->removeElement($ending)) {
            // set the owning side to null (unless already changed)
            if ($ending->getStoryNode() === $this) {
                $ending->setStoryNode(null);
            }
        }

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
            $dialog->setStoryNode($this);
        }

        return $this;
    }

    public function removeDialog(Dialogs $dialog): static
    {
        if ($this->dialogs->removeElement($dialog)) {
            // set the owning side to null (unless already changed)
            if ($dialog->getStoryNode() === $this) {
                $dialog->setStoryNode(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, AssetStory>
     */
    public function getAssetsStories(): Collection
    {
        return $this->assetsStories;
    }

    public function addAssetsStory(AssetStory $assetsStory): static
    {
        if (!$this->assetsStories->contains($assetsStory)) {
            $this->assetsStories->add($assetsStory);
            $assetsStory->setStoryNode($this);
        }

        return $this;
    }

    public function removeAssetsStory(AssetStory $assetsStory): static
    {
        if ($this->assetsStories->removeElement($assetsStory)) {
            // set the owning side to null (unless already changed)
            if ($assetsStory->getStoryNode() === $this) {
                $assetsStory->setStoryNode(null);
            }
        }

        return $this;
    }
}
