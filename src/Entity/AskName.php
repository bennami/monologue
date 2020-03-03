<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AskNameRepository")
 */
class AskName
{
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Name;

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(?string $Name): self
    {
        $this->Name = $Name;
        return $this;
    }

}
