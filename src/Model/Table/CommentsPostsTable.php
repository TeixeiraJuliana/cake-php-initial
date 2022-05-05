<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CommentsPosts Model
 *
 * @property \App\Model\Table\CommentsPostsTable&\Cake\ORM\Association\BelongsTo $CommentsPosts
 * @property \App\Model\Table\CommentsPostsTable&\Cake\ORM\Association\HasMany $CommentsPosts
 *
 * @method \App\Model\Entity\CommentsPost get($primaryKey, $options = [])
 * @method \App\Model\Entity\CommentsPost newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CommentsPost[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CommentsPost|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CommentsPost saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CommentsPost patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CommentsPost[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CommentsPost findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CommentsPostsTable extends Table
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

        $this->setTable('comments_posts');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('CommentsPosts', [
            'foreignKey' => 'comments_post_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('CommentsPosts', [
            'foreignKey' => 'comments_post_id',
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('message')
            ->maxLength('message', 600)
            ->requirePresence('message', 'create')
            ->notEmptyString('message');

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
        $rules->add($rules->existsIn(['comments_post_id'], 'CommentsPosts'));

        return $rules;
    }
}
