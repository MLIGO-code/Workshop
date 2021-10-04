<?php
declare(strict_types=1);

namespace App\Entity;

use Doctrine\Common\Collections\Collection;

interface ProductInterface
{

    public function getSuppliers(): Collection;
    public function addSupplier(SupplierInterface $supplier): void;
    public function removeSupplier(SupplierInterface $supplier): void;
    public function hasSupplier(SupplierInterface $supplier): bool;
    public function getExternalId(): string;
    public function setExternalId(?string $externalId): void;
}
