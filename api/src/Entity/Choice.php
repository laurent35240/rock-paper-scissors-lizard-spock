<?php


namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource(
 *     collectionOperations={"get","post"},
 *     itemOperations={"get"}
 * )
 * @ORM\Entity
 */
class Choice
{
    const CODES = ['rock', 'paper', 'scissors', 'lizard', 'spock'];

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
     * @Assert\Choice(choices=Choice::CODES, message="Choose a valid code.")
     */
    public $code;

    public function getId(): ?int
    {
        return $this->id;
    }
}
