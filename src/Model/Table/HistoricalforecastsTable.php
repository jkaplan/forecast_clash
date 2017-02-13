<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Database\Schema\Table as Schema;
    
/**
 * Historicalforecasts Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $WeatherEvents
 * @property \Cake\ORM\Association\BelongsTo $AdminEvents
 *
 * @method \App\Model\Entity\Historicalforecast get($primaryKey, $options = [])
 * @method \App\Model\Entity\Historicalforecast newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Historicalforecast[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Historicalforecast|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Historicalforecast patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Historicalforecast[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Historicalforecast findOrCreate($search, callable $callback = null)
 */
class HistoricalforecastsTable extends Table
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

        $this->table('historicalforecasts');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('WeatherEvents', [
            'foreignKey' => 'weather_event_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('AdminEvents', [
            'foreignKey' => 'admin_event_id',
            'joinType' => 'INNER'
        ]);
    }

    protected function _initializeSchema(Schema $schema)
    {
        $schema->columnType('location', 'point');
        return $schema;
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
            ->requirePresence('location', 'create')
            ->notEmpty('location');

        $validator
            ->integer('distance')
            ->allowEmpty('distance');

        $validator
            ->date('forecast_date')
            ->requirePresence('forecast_date', 'create')
            ->notEmpty('forecast_date');

        $validator
            ->integer('forecast_length')
            ->requirePresence('forecast_length', 'create')
            ->notEmpty('forecast_length');

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
        $rules->add($rules->existsIn(['weather_event_id'], 'WeatherEvents'));
        $rules->add($rules->existsIn(['admin_event_id'], 'AdminEvents'));

        return $rules;
    }
}
