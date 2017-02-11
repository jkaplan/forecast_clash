<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Avatars Model
 *
 * @property \Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\Avatar get($primaryKey, $options = [])
 * @method \App\Model\Entity\Avatar newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Avatar[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Avatar|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Avatar patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Avatar[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Avatar findOrCreate($search, callable $callback = null)
 */
class AvatarsTable extends Table
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

        $this->table('avatars');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('Users', [
            'foreignKey' => 'avatar_id'
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
            ->requirePresence('avatar_img', 'create')
            ->notEmpty('avatar_img');

        return $validator;
    }
}
