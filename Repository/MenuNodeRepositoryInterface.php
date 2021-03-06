<?php
/**
 * This file is part of the PositibeLabs Projects.
 *
 * (c) Pedro Carlos Abreu <pcabreus@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Positibe\Bundle\MenuBundle\Repository;

use Doctrine\ORM\QueryBuilder;
use Positibe\Bundle\MenuBundle\Model\MenuNodeInterface;

/**
 * Interface MenuNodeRepositoryInterface
 * @package Positibe\Bundle\MenuBundle\Repository
 *
 * @author Pedro Carlos Abreu <pcabreus@gmail.com>
 */
interface MenuNodeRepositoryInterface
{
    /**
     * @param $name
     * @param int $level
     * @return mixed
     * @throws \Doctrine\ORM\NonUniqueResultException|MenuNodeInterface
     */
    public function findOneByName($name, $level = 1);

    /**
     * @param QueryBuilder $qb
     * @return mixed
     */
    public function getQuery(QueryBuilder $qb);
} 