<?php

namespace app\Controllers;

class QuizController extends CoreController
{

    // Function to show the quiz page
    public function quizHome()
    {
        $this->show('quizHome');
    }
}