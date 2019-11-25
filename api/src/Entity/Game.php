<?php


namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource
 * @ORM\Entity
 */
class Game
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var Round[]
     *
     * @ORM\OneToMany(targetEntity="Round", mappedBy="game")
     * @ApiSubresource
     */
    public $rounds;

    /**
     * @var Player
     *
     * @ORM\OneToOne(targetEntity="Player")
     * @ApiSubresource
     */
    private $player1;

    /**
     * @var Player
     *
     * @ORM\OneToOne(targetEntity="Player")
     * @ApiSubresource
     */
    public $player2;
}
