<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class AnswersTable extends Table
{
  public function initialize(array $config)
  {
    parent::initialize($config);

    $this->setTable('answers');
    $this->setDisplayField('id');
    $this->setPrimaryKey('id');
    
    $this->addBehavior('Timestamp');

    $this->belongsTo('Question', [
      'foreignKey' => 'question_id',
      'joinType' => 'INNER'
    ]);
  }
}