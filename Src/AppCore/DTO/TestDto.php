<?php declare (strict_types = 1);

namespace AppCore\DTO;

use AppCore\Entities\Post;

class TestDto extends \AppCore\BaseDTO
{
    public int $id;
    public string $tittle;
    public DescriptionDTO $description;

    public static function fromEntity(Post $post)
    {
        return new self([
            'id' => $post->getId(),
            'tittle' => $post->getTittle(),
            'description' => DescriptionDTO::fromEntity($post->getDescription())
        ]);
    }
}
