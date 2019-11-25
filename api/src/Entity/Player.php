<?php


namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Enum\PlayerType;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource
 * @ORM\Entity
 */
class Player
{
    const TYPES = ['human', 'bot'];
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column
     */
    public $name;

    /**
     * @var PlayerType
     * @Assert\Choice(choices=Player::TYPES, message="Choose a valid type.")
     * @ORM\Column
     */
    public $type;

    public function getId(): ?int
    {
        return $this->id;
    }
}
