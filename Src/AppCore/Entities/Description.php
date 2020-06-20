<?php

namespace AppCore\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Description
 * @package AppCore\Entities
 * @ORM\Entity (repositoryClass="Infrastructure\Repository\PostsRepository")
 * @ORM\Table (name = "description")
 */
class Description
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private int $id;

    /**
     * @ORM\Column(name = "description", type = "string")
     * @ORM\GeneratedValue(strategy = "AUTO")
     */
    private string $description;

    /**
     * @ORM\OneToOne(targetEntity="Post", inversedBy="description", cascade={"persist", "remove"})
     */
    protected Post $post;


    public function setDescription($input) : void
    {
        $this->description = $input;
    }

    public function getDescription() : string
    {
        return $this->description;
    }

    public function getId() : string
    {
        return $this->id;
    }

    public function setPost(Post $post){
        $this->post = $post;
    }

}
