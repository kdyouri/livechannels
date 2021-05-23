<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * LiveChannel Entity
 *
 * @property int $id
 * @property string $name
 * @property string $language
 * @property string $country
 * @property string $category
 * @property string $uri
 * @property string $response_body
 * @property string $response_code
 * @property int $frame_width
 * @property int $frame_height
 * @property int $bit_rate
 * @property int $position
 * @property int $is_valid
 */
class LiveChannel extends Entity
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
        'name' => true,
        'language' => true,
        'country' => true,
        'category' => true,
        'uri' => true,
        'response_body' => true,
        'response_code' => true,
        'frame_width' => true,
        'frame_height' => true,
        'bit_rate' => true,
        'position' => true,
        'is_valid' => true,
    ];
}
