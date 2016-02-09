<?php 
// src/Model/Table/UsersTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\RulesChecker;
use Cake\ORM\Rule\IsUnique;



class ProgramTable extends Table
{

public function initialize(array $config)
    {
        $this->table('program');

    }


 public function buildRules(RulesChecker $rules)
{
    $rules->add($rules->isUnique(['pro_name']));

    return $rules;
}
public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('pro_name', 'A program name is required')
            ->notEmpty('pro_code', 'A program code is required');
            
    
          
           
    }



}
?>