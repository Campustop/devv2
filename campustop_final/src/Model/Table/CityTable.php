<?php 
// src/Model/Table/UsersTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\RulesChecker;
use Cake\ORM\Rule\IsUnique;



class CityTable extends Table
{

public function initialize(array $config)
    {
        $this->table('city');

        $this->belongsTo('Province', [
            'foreignKey' => 'province_id',
            'joinType' => 'INNER',
        ]);

    }


 public function buildRules(RulesChecker $rules)
{
    $rules->add($rules->isUnique(['city_name']));

    return $rules;
}
public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('city_name', 'A city name is required')
            ->notEmpty('province_id', 'Please select state');
             
    
          
           
    }



}
?>