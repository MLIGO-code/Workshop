<?php
declare(strict_types=1);

namespace App\Repository;

use Doctrine\ORM\QueryBuilder;
use Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository;

final class SupplierRepository extends EntityRepository {

    public function createListQueryBuilder(): QueryBuilder
    {
        return $this->createListQueryBuilder('o');
    }


}
