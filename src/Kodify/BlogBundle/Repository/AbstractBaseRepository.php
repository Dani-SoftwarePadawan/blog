<?php

namespace Kodify\BlogBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * PostRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
abstract class AbstractBaseRepository extends EntityRepository
{
    const LIST_DEFAULT_LIMIT = 5;

    public function latest($limit = self::LIST_DEFAULT_LIMIT, $offset = 0)
    {
        return $this->findBy([], ['createdAt' => 'DESC'], $limit, $offset);
    }
}