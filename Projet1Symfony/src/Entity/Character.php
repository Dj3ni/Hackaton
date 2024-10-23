<?php

namespace App\Entity;

use App\Repository\CharacterRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CharacterRepository::class)]
#[ORM\Table(name: '`character`')]
class Character
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name = null;

    /********************** Relations ***********/ 

    /**
     * @var Collection<int, Asset>
     */
    #[ORM\OneToMany(targetEntity: Asset::class, mappedBy: 'perso')]
    private Collection $assets;

    /**
     * @var Collection<int, Dialogs>
     */
    #[ORM\OneToMany(targetEntity: Dialogs::class, mappedBy: 'perso')]
    private Collection $dialogs;

    public function __construct()
    {
        $this->assets = new ArrayCollection();
        $this->dialogs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, Asset>
     */
    public function getAssets(): Collection
    {
        return $this->assets;
    }

    public function addAsset(Asset $asset): static
    {
        if (!$this->assets->contains($asset)) {
            $this->assets->add($asset);
            $asset->setPerso($this);
        }

        return $this;
    }

    public function removeAsset(Asset $asset): static
    {
        if ($this->assets->removeElement($asset)) {
            // set the owning side to null (unless already changed)
            if ($asset->getPerso() === $this) {
                $asset->setPerso(null);
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
            $dialog->setPerso($this);
        }

        return $this;
    }

    public function removeDialog(Dialogs $dialog): static
    {
        if ($this->dialogs->removeElement($dialog)) {
            // set the owning side to null (unless already changed)
            if ($dialog->getPerso() === $this) {
                $dialog->setPerso(null);
            }
        }

        return $this;
    }
}
