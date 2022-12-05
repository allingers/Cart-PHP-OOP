<?php


class Cart
{
    private array $items = [];

    //TODO Skriv getter för items

    /*
     Skall lägga till en produkt i kundvagnen genom att
     skapa ett nytt cartItem och lägga till i $items array.
     Metoden skall returnera detta cartItem.

     VG: Om produkten redan finns i kundvagnen
     skall istället quantity på cartitem ökas.
     */
    public function addProduct($product, $quantity)
    {
        if (isset($this->items[$product->getId()])) {
            $this->items[$product->getId()]->increaseQuantity();
            return $this->items[$product->getId()];
        } else {
            $cartItem = new CartItem($product, $quantity);
            $this->items[$product->getId()] = $cartItem;
            return $cartItem;
        }
    }


    //Skall ta bort en produkt ur kundvagnen (använd unset())
    public function removeProduct($product)
    {
        unset ($this->items[$product-getId()]);
    }

    //Skall returnera totala antalet produkter i kundvagnen
    //OBS: Ej antalet unika produkter
    public function getTotalQuantity()
    {
        $totalQuantity = 0;
        foreach ($this->items as $item) {
            $totalQuantity += $item->getQuantity();
        }
        return $totalQuantity;
    }

    //Skall räkna ihop totalsumman för alla produkter i kundvagnen
    //VG: Tänk på att ett cartitem kan ha olika quantity
    public function getTotalSum()
    {
        $totalSum = 0;
        foreach ($this->items as $item) {
            $totalSum += $item-getQuantity() * $item->getProduct()->getPrice();
        }
        return $totalSum;
    }
}
