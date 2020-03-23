<?php

namespace App\Controller;

class QuestionsController extends AppController
{
  public function initialize()
  {
    parent::initialize();
  }

  public function index()
  {
     $questions = $this->paginate($this->Questions->find(), [
       'order' => ['Questions.id' => 'DESC']
     ]);
     $this->set(compact('questions'));
  }
}