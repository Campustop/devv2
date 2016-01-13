<?php 
// src/Model/Table/UsersTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\RulesChecker;
use Cake\ORM\Rule\IsUnique;



class TestinomialTable extends Table
{

	public function initialize(array $config) {
    $validator
       ->requirePresence('t_image', 'create')
       ->notEmpty('t_image')
       ->notEmpty('t_name')
       ->notEmpty('description')
       }




}
?>