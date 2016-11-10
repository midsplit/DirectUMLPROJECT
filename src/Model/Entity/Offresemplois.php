<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Offresemplois Entity
 *
 * @property int $id
 * @property string $Titre
 * @property \Cake\I18n\Time $creation
 * @property string $descrition
 * @property string $responsabilites
 * @property string $aptitudes
 * @property string $exigences
 * @property string $atouts
 * @property string $remarques
 * @property string $scolarite
 * @property string $secteuractivite
 * @property string $metier
 * @property string $poste
 * @property string $situation
 * @property \Cake\I18n\Time $datedebut
 * @property int $user_id
 *
 * @property \App\Model\Entity\User $user
 */
class Offresemplois extends Entity
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
        '*' => true,
        'id' => false
    ];
    
}
