<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Educationlevels Model
 *
 * @method \App\Model\Entity\Educationlevel get($primaryKey, $options = [])
 * @method \App\Model\Entity\Educationlevel newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Educationlevel[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Educationlevel|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Educationlevel patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Educationlevel[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Educationlevel findOrCreate($search, callable $callback = null)
 */
class EducationlevelsTable extends Table
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

        $this->table('educationlevels');
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
            ->requirePresence('education', 'create')
            ->notEmpty('education');

        return $validator;
    }
}
