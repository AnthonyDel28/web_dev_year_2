<?php

/*
 * Créez 3 propriétés: Nom du produit, pix & le stock
 * Créez un constructeur
 * Créez les getters & les setters
 * Créez une méthode permettant une réduction du prix du produit.
 * La valeur n'est pas contrôlée et est passée comme paramètre de la méthode
 *
 * Créez une méthode permettant de vendre un produit:
 *      - réduire du stock la quantité vendue
 *      - afficher le montant HTVA
 *
 * Nom des deux méthodes: reduce & sell
 */


class exProduct01
{
    private string $product_name;
    private int $product_price;
    private int $stock;

    /**
     * @param string $product_name
     * @param int $product_price
     * @param int $stock
     */
    public function __construct(string $product_name, int $product_price, int $stock)
    {
        $this->setProductName($product_name);
        $this->setProductPrice($product_price);
        $this->setStock($stock);
    }

    /**
     * @param int $reduction
     * @return int
     */
    public function reduce(int $reduction) : int
    {
        $this->setProductPrice($this->getProductPrice() - $reduction);
        return $this->getProductPrice();
    }

    /**
     * @param $quantity
     * @return void
     */
    public function sell($quantity) : float
    {
        $this->setStock($this->getStock() - $quantity);
        return ($this->getProductPrice() * 0.79) * 5;
    }

    /**
     * @return string
     */
    public function getProductName(): string
    {
        return $this->product_name;
    }

    /**
     * @param string $product_name
     */
    public function setProductName(string $product_name): void
    {
        $this->product_name = $product_name;
    }

    /**
     * @return int
     */
    public function getProductPrice(): int
    {
        return $this->product_price;
    }

    /**
     * @param int $product_price
     */
    public function setProductPrice(int $product_price): void
    {
        $this->product_price = $product_price;
    }

    /**
     * @return int
     */
    public function getStock(): int
    {
        return $this->stock;
    }

    /**
     * @param int $stock
     */
    public function setStock(int $stock): void
    {
        $this->stock = $stock;
    }
}