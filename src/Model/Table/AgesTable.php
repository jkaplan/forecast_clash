<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ages Model
 *
 * @property \Cake\ORM\Association\HasMany $Profiles
 *
 * @method \App\Model\Entity\Age get($primaryKey, $options = [])
 * @method \App\Model\Entity\Age newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Age[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Age|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Age patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Age[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Age findOrCreate($search, callable $callback = null)
 */
class AgesTable extends Table
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

        $this->table('ages');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('Profiles', [
            'foreignKey' => 'age_id'
        ]);
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
            ->requirePresence('age_range', 'create')
            ->notEmpty('age_range');

        return $validator;
    }
}
