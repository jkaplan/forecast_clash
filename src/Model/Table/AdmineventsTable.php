<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Adminevents Model
 *
 * @method \App\Model\Entity\Adminevent get($primaryKey, $options = [])
 * @method \App\Model\Entity\Adminevent newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Adminevent[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Adminevent|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Adminevent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Adminevent[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Adminevent findOrCreate($search, callable $callback = null)
 */
class AdmineventsTable extends Table
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

        $this->table('adminevents');
        $this->displayField('id');
        $this->primaryKey('id');
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->dateTime('start_date')
            ->requirePresence('start_date', 'create')
            ->notEmpty('start_date');

        $validator
            ->dateTime('end_date')
            ->requirePresence('end_date', 'create')
            ->notEmpty('end_date');

        $validator
            ->integer('multiplier')
            ->requirePresence('multiplier', 'create')
            ->notEmpty('multiplier');

        return $validator;
    }
}
