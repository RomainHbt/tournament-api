<?php
// api/src/Entity/Review.php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * A review of a book.
 *
 * @ApiResource
 * @ORM\Entity
 */
class Review
{
    /**
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var int The rating of this review (between 0 and 5).
     *
     * @ORM\Column(type="smallint")
     */
    public $name;

    /**
     * @var Book The book this review is about.
     *
     * @ORM\ManyToOne(targetEntity="Tournament", inversedBy="payers")
     */
    public $tournament;

    public function getId(): ?int
    {
        return $this->id;
    }
}