<?php


namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource
 * @ORM\Entity
 */
class Round
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var Choice
     *
     * @ORM\OneToOne(targetEntity="Choice")
     * @ApiSubresource
     */
    private $choicePlayer1;

    /**
     * @var Choice
     *
     * @ORM\OneToOne(targetEntity="Choice")
     * @ApiSubresource
     */
    public $choicePlayer2;

    /**
     * @var Result
     *
     * @ORM\OneToOne(targetEntity="Result", mappedBy="round")
     * @ApiSubresource
     */
    public $result;

    /**
     * @var Game
     *
     * @ORM\ManyToOne(targetEntity="Game", inversedBy="rounds")
     */
    public $game;
}
