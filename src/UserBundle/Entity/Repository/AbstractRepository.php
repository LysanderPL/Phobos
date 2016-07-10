<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 08.07.16
 * Time: 19:09
 */

namespace UserBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Class AbstractRepository
 * @package AppBundle\Entity\Repository
 */
abstract class AbstractRepository extends EntityRepository
{

    const BUNDLE_NAME = 'UserBundle';

    /**
     * @return string
     */
    protected final function getTableName() : string
    {
        return self::BUNDLE_NAME . ":" . $this->getClassMetadata()->getTableName();
    }

}