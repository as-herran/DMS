<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TaskAssignation
 *
 * @ORM\Table(name="TASK_ASSIGNATION", indexes={@ORM\Index(name="fk_TASK_ASSIGNATION_TASK", columns={"tasks_id"}), @ORM\Index(name="fk_TASK_ASSIGNATION_USER", columns={"user_id"})})
 * @ORM\Entity
 */
class TaskAssignation
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
     * @var \Tasks
     *
     * @ORM\ManyToOne(targetEntity="Tasks")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tasks_id", referencedColumnName="id")
     * })
     */
    private $tasks;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTasks(): ?Tasks
    {
        return $this->tasks;
    }

    public function setTasks(?Tasks $tasks): self
    {
        $this->tasks = $tasks;

        return $this;
    }

    public function getUser(): ?Users
    {
        return $this->user;
    }

    public function setUser(?Users $user): self
    {
        $this->user = $user;

        return $this;
    }


}
