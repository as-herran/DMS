<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DmsTablesNames
 *
 * @ORM\Table(name="DMS_TABLES_NAMES")
 * @ORM\Entity
 */
class DmsTablesNames
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="resgistered_datetime", type="datetime", nullable=true)
     */
    private $resgisteredDatetime;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="reviewed_datetime", type="datetime", nullable=true)
     */
    private $reviewedDatetime;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getResgisteredDatetime(): ?\DateTimeInterface
    {
        return $this->resgisteredDatetime;
    }

    public function setResgisteredDatetime(?\DateTimeInterface $resgisteredDatetime): self
    {
        $this->resgisteredDatetime = $resgisteredDatetime;

        return $this;
    }

    public function getReviewedDatetime(): ?\DateTimeInterface
    {
        return $this->reviewedDatetime;
    }

    public function setReviewedDatetime(?\DateTimeInterface $reviewedDatetime): self
    {
        $this->reviewedDatetime = $reviewedDatetime;

        return $this;
    }


}
