<?php

require __DIR__ . "/../../source/autoload.php";

use source\Models\Faq\Question;
use source\Models\Faq\Type;

$type1 = new Type(1, "Inscrições");
$type2 = new Type(2, "Sobre o Evento");

$question1 = new Question(1, "Precisa de dado bancário para realizar a inscrição?", "Não.", $type1);
$question2 = new Question(2, "É aberto ao público ou só pra comunidade escolar?", "Aberto ao público.", $type2);

// echo "{$question1->getId()} <br>";
// echo "{$question2->getId()} <br>";

$question1->setAnswer("Não. Porque da pergunta? Detectado algo fora do comum deve contatar o pessoal da TI");

echo "{$type1->show()} <br>";
echo "{$type2->show()} <br>";

echo "{$question1->show()} <br>";
echo "{$question2->show()} <br>";