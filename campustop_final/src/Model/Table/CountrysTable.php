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
        $this->table('countrys');

    }


 public function buildRules(RulesChecker $rules)
{
    $rules->add($rules->isUnique(['country_name']));

    return $rules;
}
public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('country_name', 'A country name is required')
            ->notEmpty('country_code', 'A country code is required');
      
    
          
           
    }



}
?>