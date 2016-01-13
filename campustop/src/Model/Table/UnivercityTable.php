<?php 
// src/Model/Table/UsersTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\RulesChecker;
use Cake\ORM\Rule\IsUnique;



class UnivercityTable extends Table
{

public function initialize(array $config)
    {
        $this->table('univercity');
        $this->belongsTo('Countrys', [
            'foreignKey' => 'country_id',
            'joinType' => 'INNER',
        ]);

    }


 public function buildRules(RulesChecker $rules)
{
    $rules->add($rules->isUnique(['univercity_name']));

    return $rules;
}
public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('univercity_name', 'A univercity_name name is required')
             ->notEmpty('country_id', 'please select country');
            
             
    
          
           
    }



}
?>