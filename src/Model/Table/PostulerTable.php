<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Search\Manager;


/**
 * Postuler Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $Offresemplois
 * @property \Cake\ORM\Association\BelongsTo $Files
 *
 * @method \App\Model\Entity\Postuler get($primaryKey, $options = [])
 * @method \App\Model\Entity\Postuler newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Postuler[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Postuler|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Postuler patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Postuler[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Postuler findOrCreate($search, callable $callback = null)
 */
class PostulerTable extends Table
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
        $this->addBehavior('Search.Search');

        $this->table('postuler');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Offresemplois', [
            'foreignKey' => 'offresemploi_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Files', [
            'foreignKey' => 'file_id',
            'joinType' => 'INNER'
        ]);
        
        $this->searchManager()
            ->value('id')
            // Here we will alias the 'q' query param to search the `Articles.title`
            // field and the `Articles.content` field, using a LIKE match, with `%`
            // both before and after.
            ->add('q', 'Search.Like', [
                'before' => true,
                'after' => true,
                'mode' => 'or',
                'comparison' => 'LIKE',
                'wildcardAny' => '*',
                'wildcardOne' => '?',
                'field' => ['id']
            ])
            ->add('foo', 'Search.Callback', [
                'callback' => function ($query, $args, $filter) {
                    // Modify $query as required
                }
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
            ->requirePresence('Nom', 'create')
            ->notEmpty('Nom');

        $validator
            ->requirePresence('Prenom', 'create')
            ->notEmpty('Prenom');

        $validator
            ->requirePresence('Telephone', 'create')
            ->notEmpty('Telephone');

        $validator
            ->requirePresence('Email', 'create')
            ->notEmpty('Email');

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
        $rules->add($rules->existsIn(['offresemploi_id'], 'Offresemplois'));
        $rules->add($rules->existsIn(['file_id'], 'Files'));

        return $rules;
    }
}
