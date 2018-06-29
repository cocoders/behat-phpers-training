<?php declare(strict_types=1);

namespace Infrastructure\File;

use Everzet\PersistedObjects\AccessorObjectIdentifier;
use Everzet\PersistedObjects\FileRepository;
use Model\Task;

class TaskList implements \Model\TaskList
{
    /** @var FileRepository  */
    private $taskList;

    public function __construct()
    {
        $this->taskList = new FileRepository('task.dat', new AccessorObjectIdentifier('id'));
    }

    public function clear(): void
    {
        $this->taskList->clear();
    }

    public function add(Task $task): void
    {
        $this->taskList->save($task);
    }

    /**
     * @return Task[]
     */
    public function findAll(): array
    {
        return $this->taskList->getAll();
    }
}