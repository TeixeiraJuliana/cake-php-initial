<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CommentsPost Entity
 *
 * @property int $id
 * @property string $message
 * @property int $comments_post_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\CommentsPost[] $comments_posts
 */
class CommentsPost extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'message' => true,
        'comments_post_id' => true,
        'created' => true,
        'modified' => true,
        'comments_posts' => true,
    ];
}