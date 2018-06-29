<?php declare(strict_types=1);

namespace Model;

class Task
{
    /**
     * @var string
     */
    private $id;
    /**
     * @var string
     */
    private $content;

    public function __construct(string $id, string $content)
    {
        $this->id = $id;
        $this->content = $content;
    }

    public function id(): string
    {
        return $this->id;
    }

    public function content(): string
    {
        return $this->content;
    }
}