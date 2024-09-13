<?php

namespace App\Entity;

use App\Repository\TagRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TagRepository::class)]
class Tag
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
}
