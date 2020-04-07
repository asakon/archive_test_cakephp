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

  /*
  * @return \Cake\Http\Response | null 質問投稿時に質問一覧画面へ遷移する
  */
  public function add()
  {
    $question = $this->Questions->newEntity();

    if ($this->request->is('post')) {
      // フォームの処理を書く 
    }

    $this->set(compact('question'));
  }
  
}