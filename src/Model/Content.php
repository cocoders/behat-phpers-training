<?php

declare(strict_types=1);

namespace Model;

class Content
{
    /**
     * @var string
     */
    private $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    public function __toString(): string
    {
        return $this->content;
    }

    public function toUpper(): string
    {
        return strtoupper($this->content);
    }

    public function toLower(): string
    {
        return strtolower($this->content);
    }
}
