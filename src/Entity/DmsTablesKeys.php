<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DmsTablesKeys
 *
 * @ORM\Table(name="DMS_TABLES_KEYS", indexes={@ORM\Index(name="fk_TABLE_KEY_TABLE_NAME", columns={"table_name_id"})})
 * @ORM\Entity
 */
class DmsTablesKeys
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
     * @ORM\Column(name="key_name", type="string", length=255, nullable=false)
     */
    private $keyName;

    /**
     * @var string
     *
     * @ORM\Column(name="key_type", type="string", length=100, nullable=false)
     */
    private $keyType;

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

    /**
     * @var \DmsTablesNames
     *
     * @ORM\ManyToOne(targetEntity="DmsTablesNames")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="table_name_id", referencedColumnName="id")
     * })
     */
    private $tableName;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKeyName(): ?string
    {
        return $this->keyName;
    }

    public function setKeyName(string $keyName): self
    {
        $this->keyName = $keyName;

        return $this;
    }

    public function getKeyType(): ?string
    {
        return $this->keyType;
    }

    public function setKeyType(string $keyType): self
    {
        $this->keyType = $keyType;

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

    public function getTableName(): ?DmsTablesNames
    {
        return $this->tableName;
    }

    public function setTableName(?DmsTablesNames $tableName): self
    {
        $this->tableName = $tableName;

        return $this;
    }


}
