<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SocialProfiles Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\SocialProfile get($primaryKey, $options = [])
 * @method \App\Model\Entity\SocialProfile newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SocialProfile[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SocialProfile|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SocialProfile patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SocialProfile[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SocialProfile findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SocialProfilesTable extends Table
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

        $this->table('social_profiles');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
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
            ->requirePresence('provider', 'create')
            ->notEmpty('provider');

        $validator
            ->requirePresence('identifier', 'create')
            ->notEmpty('identifier');

        $validator
            ->allowEmpty('profile_url');

        $validator
            ->allowEmpty('website_url');

        $validator
            ->allowEmpty('photo_url');

        $validator
            ->allowEmpty('display_name');

        $validator
            ->allowEmpty('description');

        $validator
            ->allowEmpty('first_name');

        $validator
            ->allowEmpty('last_name');

        $validator
            ->allowEmpty('gender');

        $validator
            ->allowEmpty('language');

        $validator
            ->allowEmpty('age');

        $validator
            ->allowEmpty('birth_day');

        $validator
            ->allowEmpty('birth_month');

        $validator
            ->allowEmpty('birth_year');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->allowEmpty('email_verified');

        $validator
            ->allowEmpty('phone');

        $validator
            ->allowEmpty('address');

        $validator
            ->allowEmpty('country');

        $validator
            ->allowEmpty('region');

        $validator
            ->allowEmpty('city');

        $validator
            ->allowEmpty('zip');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
