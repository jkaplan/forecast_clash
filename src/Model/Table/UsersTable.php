<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \Cake\ORM\Association\HasMany $BadgesUsers
 * @property \Cake\ORM\Association\HasMany $FinalScores
 * @property \Cake\ORM\Association\HasMany $Forecasts
 * @property \Cake\ORM\Association\HasMany $HistoricalForecasts
 * @property \Cake\ORM\Association\HasMany $Profiles
 * @property \Cake\ORM\Association\HasMany $StatesUsers
 * @property \Cake\ORM\Association\HasMany $Stats
 * @property \Cake\ORM\Association\HasMany $TeamsUsers
 * @property \Cake\ORM\Association\HasMany $WeeklyContestForecasts
 * @property \Cake\ORM\Association\HasMany $WeeklyScores
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null)
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
        
        $this->hasMany('ADmad/HybridAuth.SocialProfiles');

        \Cake\Event\EventManager::instance()->on('HybridAuth.newUser', [$this, 'createUser']);

        $this->table('users');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('BadgesUsers', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('FinalScores', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Forecasts', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('HistoricalForecasts', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Profiles', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('StatesUsers', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Stats', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('TeamsUsers', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('WeeklyContestForecasts', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('WeeklyScores', [
            'foreignKey' => 'user_id'
        ]);
    }
    
    //HybridAuth Create User
    public function createUser(\Cake\Event\Event $event) {
        // Entity representing record in social_profiles table
        $profile = $event->data()['profile'];

        $user = $this->newEntity(['email' => $profile->email]);
        $user = $this->save($user);

        if (!$user) {
            throw new \RuntimeException('Unable to save new user');
        }

        return $user;
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
            ->add('email', [
                'email' => [
                    'rule' => 'email',
                    'message' => "Please use a valid email format"
                ]
            ])->add('email', [
                'unique' => [
                    'rule' => 'validateUnique', 
                    'provider' => 'table', 
                    'message' => 'This email is already associated with an active account'
                ]
            ])
            ->requirePresence('email', 'create')
            ->notEmpty('email', 'Please provide your email');

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password', 'Password must be between 8 and 50 characters')
            ->add('password', [
                'passLength' => [
                    'rule' => ['lengthBetween', 8, 50],
                    'message' => 'Password must be between 8 and 50 characters'
                ]
            ])
            ->add('password', [
                'lower' => [
                    'rule' => ['custom', '/^(?=.*[a-z])/'],
                    'message' => 'Password must contain at least 1 lowercase letter'
                ]
            ])
            ->add('password', [
                'upper' => [
                    'rule' => ['custom', '/^(?=.*[A-Z])/'],
                    'message' => 'Password must contain at least 1 uppercase letter'
                ]
            ])
            ->add('password', [
                'number' => [
                    'rule' => ['custom', '/^(?=.*\d)/'],
                    'message' => 'Password must contain at least 1 number'
                ]
            ])
            ->add('password', [
                'special' => [
                    'rule' => ['custom', '/^[0-9a-zA-Z!@#$%]+$/'],
                    'message' => 'Password may contain letters, numbers, and the following special characters: !@#$%'
                ]
            ])
            ->add('password', [
                'compare' => [
                    'rule' => ['compareWith', 'confirm_password'],
                    'message' => 'Passwords must match'
                ]
            ]);

        $validator
            ->requirePresence('first_name', 'create')
            ->notEmpty('first_name', 'Please provide your first name')
            ->add('first_name', [
                'regex' => [
                    'rule' => ['custom', '/^[a-zA-Z\s]+$/i'],
                    'message' => 'First name may contain only letters, spaces, -, and \''
                ]
            ])
            ->add('first_name', [
                'maxLength' => [
                    'rule' => ['maxLength', 20],
                    'message' => 'First name may only contain 20 characters'
                ]
            ]);
        

        $validator
            ->requirePresence('last_name', 'create')
            ->notEmpty('last_name', 'Please provide your last name')
            ->add('last_name', [
                'regex' => [
                    'rule' => ['custom', '/^[a-zA-Z\s]+$/i'],
                    'message' => 'Last name may contain only letters, spaces, -, and \''
                ]
            ])
            ->add('last_name', [
                'maxLength' => [
                    'rule' => ['maxLength', 20],
                    'message' => 'Last name may only contain 20 characters'
                ]
            ]);

        $validator
            ->allowEmpty('avatar_id');

        $validator
            ->boolean('meteorologist')
            ->requirePresence('meteorologist', 'create')
            ->notEmpty('meteorologist', 'Please select your meteorological experience');

        $validator
            ->allowEmpty('date_created');

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
