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
 * Faites en sorte que l'on ne puisse pas vendre plus que le stock
 */


class exProduct
{
    private string $product_name;
    private int $product_price;
    private int $stock;
    private int $tva;



    /**
     * @param string $product_name
     * @param int $product_price
     * @param int $stock
     */
    public function __construct(string $product_name, int $product_price, int $stock, int $tva)
    {
        $this->setProductName($product_name);
        $this->setProductPrice($product_price);
        $this->setStock($stock);
        $this->setTva($tva);
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
        if($this->getStock() >= $quantity){
            $this->setStock($this->getStock() - $quantity);
            return ($this->getProductPrice() + ($this->getProductPrice() / 100) * $this->getTva()) * $quantity;
        } else {
            print 'Il n\'y a pas assez de stock pour cette vente!';
            die;
        }
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

    /**
     * @return float
     */
    public function getTva(): float
    {
        return $this->tva;
    }

    /**
     * @param float $tva
     */
    public function setTva(float $tva): void
    {
        $this->tva = $tva;
    }
}