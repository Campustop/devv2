<?php 
// src/Model/Table/UsersTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\RulesChecker;
use Cake\ORM\Rule\IsUnique;



class UsereducationTable extends Table
{

public function initialize(array $config)
    {
        $this->table('user_education');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);

        $this->belongsTo('Program', [
            'foreignKey' => 'program_id',
            'joinType' => 'INNER',
        ]);
         
        
         
         

    }





}
?>