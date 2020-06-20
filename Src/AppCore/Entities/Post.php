<?php
declare(strict_types = 1);

namespace AppCore\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Infrastructure\Repository\PostsRepository")
 * @ORM\Table(name="posts")
 */
class Post
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private int $id;

    /**
     * @ORM\Column(name = "tittle", type="string")
     */
    private string $tittle;

    /**
     * @ORM\OneToOne(targetEntity="Description", mappedBy="post", cascade={"persist", "remove"})
     */

    private Description $description;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTittle(): string
    {
        return $this->tittle;
    }

    /**
     * @param string $tittle
     */
    public function setTittle(string $tittle): void
    {
        $this->tittle = $tittle;
    }

    /**
     * @return Description
     */
    public function getDescription(): Description
    {
        return $this->description;
    }

    /**
     * @param Description $description
     */
    public function setDescription(Description $description): void
    {
        $this->description = $description;
    }


}
