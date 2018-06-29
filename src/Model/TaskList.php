<?php

declare(strict_types=1);

namespace Model;

interface TaskList
{
    public function clear(): void;

    public function add(Task $task): void;

    /**
     * @return Task[]
     */
    public function findAll(): array;
}