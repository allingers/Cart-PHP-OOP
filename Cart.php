<?php

class Cart
{
    private array $items = [];

    public function getItems()
    {
        return $this->items;
    }

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

    public function removeProduct($product)
    {
        unset($this->items[$product->getId()]);
    }

    public function getTotalQuantity()
    {
        $totalQuantity = 0;
        foreach ($this->items as $item) {
            $totalQuantity += $item->getQuantity();
        }
        return $totalQuantity;
    }

    // *** VG ****
    public function getTotalSum()
    {
        $totalSum = 0;
        foreach ($this->items as $item) {
            $totalSum += $item->getQuantity() * $item->getProduct()->getPrice();
        }
        return $totalSum;
    }
}

