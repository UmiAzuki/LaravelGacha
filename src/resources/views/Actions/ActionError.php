<?php

declare(strict_types=1);

namespace App\Actions;

use JsonSerializable;

class ActionError implements JsonSerializable
{
    public const BAD_REQUEST = 'BAD_REQUEST';
    public const INSUFFICIENT_PRIVILEGES = 'INSUFFICIENT_PRIVILEGES';
    public const NOT_ALLOWED = 'NOT_ALLOWED';
    public const NOT_IMPLEMENTED = 'NOT_IMPLEMENTED';
    public const RESOURCE_NOT_FOUND = 'RESOURCE_NOT_FOUND';
    public const SERVER_ERROR = 'SERVER_ERROR';
    public const UNAUTHENTICATED = 'UNAUTHENTICATED';
    public const VALIDATION_ERROR = 'VALIDATION_ERROR';
    public const VERIFICATION_ERROR = 'VERIFICATION_ERROR';

    private string $type;

    private ?string $description;

    private ?string $file;

    private ?int $line;

    private ?string $trace;

    public function __construct(string $type, ?string $description = null, ?string $file = null, ?int $line = null, ?string $trace = null)
    {
        $this->type = $type;
        $this->description = $description;
        $this->file = $file;
        $this->line = $line;
        $this->trace = $trace;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description = null): self
    {
        $this->description = $description;
        return $this;
    }

    public function getFile(): ?string
    {
        return $this->description;
    }

    public function setFile(?string $file = null): self
    {
        $this->file = $file;
        return $this;
    }

    public function getLine(): ?int
    {
        return $this->line;
    }

    public function setLine(?int $line = null): self
    {
        $this->line = $line;
        return $this;
    }

    public function getTrace(): ?string
    {
        return $this->trace;
    }

    public function setTrace(?string $trace = null): self
    {
        $this->trace = $trace;
        return $this;
    }

    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        return [
            'type' => $this->type,
            'description' => $this->description,
            'file' => $this->file,
            'line' => $this->line,
            'trace' => $this->trace
        ];
    }
}
