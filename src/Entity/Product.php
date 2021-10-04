<?php
declare(strict_types=1);

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Sylius\Component\Core\Model\Product as BaseProduct;

class Product extends BaseProduct implements ProductInterface
{
    /** @var SupplierInterface[] */
    private $suppliers;

    /** @var string | null*/
    private $externalId;

    public function __construct()
    {
        parent::__construct();
        $this->suppliers = new ArrayCollection();
    }
    public function getSuppliers(): Collection
    {
        return $this->suppliers;
    }

    public function addSupplier(SupplierInterface $supplier): void
    {
        if (!$this->hasSupplier($supplier)) {
            $this->suppliers->add($supplier);
        }
    }

    public function removeSupplier(SupplierInterface $supplier): void
    {
        if ($this->hasSupplier($supplier)) {
            $this->suppliers->removeElement($supplier);
        }
    }

    public function hasSupplier(SupplierInterface $supplier): bool
    {
        return $this->suppliers->contains($supplier);
    }

    public function getExternalId(): string
    {
        return $this->externalId;
    }


    public function setExternalId(?string $externalId): void
    {
        $this->externalId = $externalId;
    }


}
