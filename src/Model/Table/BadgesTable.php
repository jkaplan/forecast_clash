<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Badges Model
 *
 * @property \Cake\ORM\Association\HasMany $BadgesUsers
 *
 * @method \App\Model\Entity\Badge get($primaryKey, $options = [])
 * @method \App\Model\Entity\Badge newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Badge[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Badge|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Badge patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Badge[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Badge findOrCreate($search, callable $callback = null)
 */
class BadgesTable extends Table
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

        $this->table('badges');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('BadgesUsers', [
            'foreignKey' => 'badge_id'
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
            ->requirePresence('badge_name', 'create')
            ->notEmpty('badge_name');

        $validator
            ->requirePresence('badge_desc', 'create')
            ->notEmpty('badge_desc');

        $validator
            ->allowEmpty('badge_img');

        return $validator;
    }
}
