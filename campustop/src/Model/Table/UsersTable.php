<?php 
// src/Model/Table/UsersTable.php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\RulesChecker;
use Cake\ORM\Rule\IsUnique;

class UsersTable extends Table
{

public function initialize(array $config)
    {
        $this->table('users');
		$this->belongsTo('Countrys', [
            'foreignKey' => 'country_id',
            'joinType' => 'INNER',
        ]);
        
        }


public function logout()
{
    return $this->redirect($this->Auth->logout());
}

public function generateRandomString($length = 8) {

        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;

        }
}
?>