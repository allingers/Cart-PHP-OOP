# PHP Shopping Cart

PHP-projekt som simulerar en shopping cart (kundvagn) funktionalitet. Projektet består av tre huvudsakliga klasser: `Product`, `Cart`, och `CartItem`, som hanterar produkter, kundvagnen och de enskilda objekten i kundvagnen.

## Innehåll

- [Funktioner](#funktioner)
- [Förutsättningar](#förutsättningar)
- [Installation](#installation)
- [Användning](#användning)
- [Mappstruktur](#mappstruktur)

## Funktioner

- Skapa produkter med titel, pris och lagerstatus.
- Lägg till produkter i kundvagnen.
- Hantera produktkvantiteter i kundvagnen.
- Beräkna total kvantitet och totalsumma för produkter i kundvagnen.
- Hantera lagerstatus vid försök att öka kvantitet över tillgängligt lager.
- Ta bort produkter från kundvagnen.

## Förutsättningar

För att köra detta projekt behöver du:

- En webbserver med PHP (t.ex. XAMPP, WAMP, MAMP)
- En webbläsare

## Installation

1. Klona detta repository till din lokala maskin:
    ```bash
    git clone https://github.com/ditt-användarnamn/php-shopping-cart.git
    ```

2. Navigera till projektmappen:
    ```bash
    cd Cart-PHP-OOP
    ```

3. Starta din lokala webbserver och placera projektmappen i webbrotkatalogen (t.ex. `htdocs` för XAMPP).

4. Öppna din webbläsare och navigera till:
    ```
    http://localhost/Cart-PHP-OOP/index.php
    ```

    ## Användning

1. Projektet kommer att skapa tre produkter och lägga till dem i kundvagnen vid sidladdning.
2. Produktnamn, antal och totalpris kommer att visas.
3. Kvantiteten av en produkt kan ökas, och projektet kommer att hantera lagerstatusen.
4. Produkter kan tas bort från kundvagnen och uppdaterade kvantiteter och priser visas.

## Mappstruktur

```plaintext
Cart-PHP-OOP/
│
├── Product.php        # Klassfil för Product
├── Cart.php           # Klassfil för Cart
├── CartItem.php       # Klassfil för CartItem
├── index.php          # Huvud PHP-filen
└── README.md          # Projektbeskrivning
