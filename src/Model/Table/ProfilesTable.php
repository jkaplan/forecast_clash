<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Profiles Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $EducationLevels
 * @property \Cake\ORM\Association\BelongsTo $States
 *
 * @method \App\Model\Entity\Profile get($primaryKey, $options = [])
 * @method \App\Model\Entity\Profile newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Profile[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Profile|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Profile patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Profile[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Profile findOrCreate($search, callable $callback = null)
 */
class ProfilesTable extends Table
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

        $this->table('profiles');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('EducationLevels', [
            'foreignKey' => 'education_level_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('States', [
            'foreignKey' => 'state_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Ages', [
            'foreignKey' => 'age_id',
            'joinType' => 'INNER'
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
            ->boolean('gender')
            ->requirePresence('gender', 'create')
            ->notEmpty('gender', 'Please select your gender');

        $validator
            ->requirePresence('city', 'create')
            ->notEmpty('city', 'Please indicate the city in which you currently reside')
            ->add('city', [
                'regex' => [
                    'rule' => ['custom', '/^[a-zA-Z\s]+$/i'],
                    'message' => 'City may contain only letters, spaces, -, and \''
                ]
            ]);
                
        $validator
            ->integer('state_id')
            ->requirePresence('state_id', 'create')
            ->notEmpty('state_id', 'Please indicate the state in which you currently reside');
        
        $validator
            ->integer('education_level_id')
            ->requirePresence('education_level_id', 'create')
            ->notEmpty('education_level_id', 'Please indicate your current education level');
        
        $validator
            ->integer('age_id')
            ->requirePresence('age_id', 'create')
            ->notEmpty('age_id', 'Please indicate your current age range');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['education_level_id'], 'EducationLevels'));
        $rules->add($rules->existsIn(['state_id'], 'States'));

        return $rules;
    }
}
