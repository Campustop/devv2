<?php 
// src/Model/Table/UsersTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\RulesChecker;
use Cake\ORM\Rule\IsUnique;



class CollageTable extends Table
{

public function initialize(array $config)
    {
        $this->table('collage');

        $this->belongsTo('Countrys', [
            'foreignKey' => 'country_id',
            'joinType' => 'INNER',
        ]);
         $this->belongsTo('Province', [
            'foreignKey' => 'province_id',
            'joinType' => 'INNER',
        ]);

    }


 public function buildRules(RulesChecker $rules)
{
    $rules->add($rules->isUnique(['collage_name']));

    return $rules;
}
public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('collage_name', 'A collage name is required')
            ->notEmpty('country_id', 'Please select country')
             ->notEmpty('province_id', 'Please select province');
             
    
          
           
    }



}
?>