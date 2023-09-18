<?php
/**
 * Created by PhpStorm.
 * User: Exodus4D
 * Date: 19.05.2018
 * Time: 03:47
 */

namespace Exodus4D\ESI\Mapper\Esi\Universe;

use Exodus4D\Pathfinder\Data\Mapper\AbstractIterator;

class Stargate extends AbstractIterator {

    /**
     * @var array
     */
    protected static $map = [
        'stargate_id'       => 'id',
        'name'              => 'name',
        'system_id'         => 'systemId',
        'type_id'           => 'typeId',
        'destination'       => 'destination',
        'position'          => 'position',
        'x'                 => 'x',
        'y'                 => 'y',
        'z'                 => 'z'
    ];
}