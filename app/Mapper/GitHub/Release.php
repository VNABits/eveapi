<?php
/**
 * Created by PhpStorm.
 * User: Exodus 4D
 * Date: 29.01.2019
 * Time: 23:15
 */

namespace Exodus4D\ESI\Mapper\GitHub;

use Exodus4D\Pathfinder\Data\Mapper\AbstractIterator;

class Release extends AbstractIterator {

    /**
     * @var array
     */
    protected static $map = [
        'id'            => 'id',
        'name'          => 'name',
        'prerelease'    => 'prerelease',
        'published_at'  => 'publishedAt',
        'html_url'      => 'url',
        'tarball_url'   => 'urlTarBall',
        'zipball_url'   => 'urlZipBall',
        'body'          => 'body'
    ];
}