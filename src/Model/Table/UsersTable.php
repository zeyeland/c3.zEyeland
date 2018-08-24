<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 */
class UsersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('islander_id');
        $this->setPrimaryKey('islander_id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('islander_id')
            ->allowEmpty('islander_id', 'create');

        $validator
            ->scalar('islander_name')
            ->maxLength('islander_name', 50)
            ->requirePresence('islander_name', 'create')
            ->notEmpty('islander_name');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email')
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('password')
            ->maxLength('password', 100)
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->integer('body')
       //     ->requirePresence('body', 'create')
            ->notEmpty('body');

        $validator
            ->integer('mind')
        //    ->requirePresence('mind', 'create')
            ->notEmpty('mind');

        $validator
            ->integer('spirit')
        //    ->requirePresence('spirit', 'create')
            ->notEmpty('spirit');

        $validator
            ->integer('level')
        //    ->requirePresence('level', 'create')
            ->notEmpty('level');

        $validator
            ->integer('exp')
       //     ->requirePresence('exp', 'create')
            ->notEmpty('exp');

        $validator
            ->integer('purse')
       //     ->requirePresence('purse', 'create')
            ->notEmpty('purse');

        $validator
            ->integer('honor')
        //    ->requirePresence('honor', 'create')
            ->notEmpty('honor');

        $validator
            ->integer('health')
        //    ->requirePresence('health', 'create')
            ->notEmpty('health');

        $validator
            ->scalar('islander_focus')
            ->maxLength('islander_focus', 50)
        //    ->requirePresence('islander_focus', 'create')
            ->notEmpty('islander_focus');
        
        $validator
            ->integer('quest_points')
        //    ->requirePresence('quest_points', 'create')
            ->notEmpty('quest_points');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
