<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property int $id
 * @property float $total
 * @property \Cake\I18n\FrozenTime $delivery_date
 * @property int $user_id
 * @property \Cake\I18n\FrozenTime $update_at
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $delete_at
 *
 * @property \App\Model\Entity\User $user
 */
class Order extends Entity
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
        'total' => true,
        'delivery_date' => true,
        'user_id' => true,
        'update_at' => true,
        'created_at' => true,
        'delete_at' => true,
        'user' => true,
    ];
}
