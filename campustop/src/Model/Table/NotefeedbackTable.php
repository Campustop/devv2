<?php 
// src/Model/Table/UsersTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\RulesChecker;
use Cake\ORM\Rule\IsUnique;



class NotefeedbackTable extends Table
{

public function initialize(array $config)
    {
        $this->table('note_feedback');

        $this->belongsTo('Note', [
            'foreignKey' => 'note_id',
            'joinType' => 'INNER',
        ]);
         
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
    }

}
?>