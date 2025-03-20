<?php

require __DIR__ . "/../source/autoload.php";

use Source\Models\User;
use Source\Models\Type as UserType;
use Source\Models\Faq\Type as FaqType;
use Source\Models\Faq\Question;

$questionType = new FaqType();
$question = new Question();

var_dump($questionType, $question);

$user = new User();
$userType = new UserType();

var_dump($user, $userType);