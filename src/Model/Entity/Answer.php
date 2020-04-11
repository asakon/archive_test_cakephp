<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Answers extends Entiry
{
  protected $_accessible = [
    'question_id' => true,
    'user_id' => true,
    'body' => true,
    'created' => true,
    'modified' => true
  ];
}