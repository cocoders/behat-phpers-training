<?php declare(strict_types=1);

namespace Infrastructure\InMemory;

use Model\Task;

class TaskList implements \Model\TaskList
{
    private $list = [];

    public function clear(): void
    {
        $this->list = [];
    }

    public function add(Task $task): void
    {
        $this->list[] = $task;
    }

    /**
     * @return Task[]
     */
    public function findAll(): array
    {
        return $this->list;
    }
}