<?php

namespace App\Entity;

use App\Repository\SectionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SectionRepository::class)]
class Section
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column
    (
        # on souhaite ne pas perdre la moitié des numériques... donc unsigned !
        options: [
            'unsigned' =>  true,
        ]
    )
        ]
        private ?int $id = null;
        public function getId(): ?int
        {
            return $this->id;
        }
}
