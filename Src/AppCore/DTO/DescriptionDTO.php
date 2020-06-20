<?php declare (strict_types = 1);

namespace AppCore\DTO;

use AppCore\BaseDTO;
use AppCore\Entities\Description;

class DescriptionDTO extends BaseDTO
{
    public int $id;
    public string $description;

    public static function fromEntity(Description $description)
    {
        return new self([
            'id' => $description->getId(),
            'description' => $description->getDescription()
        ]);
    }
}
