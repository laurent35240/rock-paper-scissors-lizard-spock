<?php


namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource(
 *     collectionOperations={"get"},
 *     itemOperations={"get"}
 * )
 * @ORM\Entity
 */
class Result
{
    const CODES = ['player1_win', 'player2_win', 'tight'];
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
     * @Assert\Choice(choices=Result::CODES, message="Choose a valid code.")
     */
    public $code;

    /**
     * @var string
     *
     * @ORM\Column
     */
    public $message;

    /**
     * @var Round
     *
     * @ORM\OneToOne(targetEntity="Round", inversedBy="result")
     */
    public $round;

    public function getId(): ?int
    {
        return $this->id;
    }
}
