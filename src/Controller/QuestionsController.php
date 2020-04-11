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
      $question = $this->Questions->patchEntity($question, $this->request->getData());

      $question->user_id = 1;  // @TODO ユーザー管理機能実装時に修正する

      if ($this->Questions->save($question)) {
        $this->Flash->success('質問を投稿しました');

        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error('質問の投稿に失敗しました');
    }

    $this->set(compact('question'));
  }
  
}