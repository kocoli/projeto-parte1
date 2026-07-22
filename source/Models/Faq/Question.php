<?php

namespace Source\Models\Faq;

use source\Models\Faq\Type;

class Question
{
    private ?int $id;
    private ?string $question;
    private ?string $answer;
    private ?Type $type;

    public function __construct(
        ?int $id = null,
        ?string $question = null,
        ?string $answer,
        ?Type $type = null
    )
    {
        $this->id = $id;
        $this->question = $question;
        $this->answer = $answer;
        $this->type = $type;
    }

    public function getId() : ?int
    {
        return $this->id;
    }

    public function getQuestion() : ?string
    {
        return $this->question;
    }
    
    public function getAnswer() : ?string
    {
        return $this->answer;
    }

    public function getType() : ?Type
    {
        return $this->type;
    }
 
    public function setId(int $id) : void
    {
        $this->id = $id;
    }

    public function setQuestion(string $question) : void
    {
        $this->question = $question;
    }

    public function setAnswer(string $answer) : void
    {
        $this->answer = $answer;
    }

    public function setType(Type $type) : void
    {
        $this->type = $type;
    }

    public function show() : string {
        return "
            FAQ {$this->id}  <br>
            Categoria: {$this->type->getDescription()}  <br>
            Pergunta: {$this->question}  <br>
            Resposta: {$this->answer}  <br>
        ";
    }
}