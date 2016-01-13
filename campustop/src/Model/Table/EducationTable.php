<?php 
// src/Model/Table/UsersTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\RulesChecker;
use Cake\ORM\Rule\IsUnique;



class EducationTable extends Table
{

public function initialize(array $config)
    {
        $this->table('user_education');

        $this->belongsTo('Program', [
            'foreignKey' => 'program_id',
            'joinType' => 'INNER',
        ]);
      


    }


public function validationDefault(Validator $validator)
    {
        return $validator
          ->notEmpty('fname', 'A country name is required')
           ->notEmpty('mname', 'A country code is required');
      
    
          
           
    }



}
?>