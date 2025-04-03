<?php

namespace Source\Models\Faq;

use Source\Core\Connect;
use Source\Core\Model;

class Question extends Model
{
    private $id;
    private $typeId;
    private $question;
    private $answer;

    public function __construct (
        int $id = null,
        int $typeId = null,
        string $question = null,
        string $answer = null
    )
    {
        $this->table = "questions";
        $this->id = $id;
        $this->typeId = $typeId;
        $this->question = $question;
        $this->answer = $answer;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getTypeId(): ?int
    {
        return $this->typeId;
    }

    public function setTypeId(?int $typeId): void
    {
        $this->typeId = $typeId;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(?string $question): void
    {
        $this->question = $question;
    }

    public function getAnswer(): ?string
    {
        return $this->answer;
    }

    public function setAnswer(?string $answer): void
    {
        $this->answer = $answer;
    }

}