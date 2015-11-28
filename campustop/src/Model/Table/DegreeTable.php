<?php 
// src/Model/Table/UsersTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\RulesChecker;
use Cake\ORM\Rule\IsUnique;



class CountrysTable extends Table
{

public function initialize(array $config)
    {
        $this->table('degree');

    }


 public function buildRules(RulesChecker $rules)
{
    $rules->add($rules->isUnique(['de_name']));

    return $rules;
}
public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('de_name', 'A degree name is required')
            ->notEmpty('de_code', 'A degree code is required');
            
    
          
           
    }



}
?>