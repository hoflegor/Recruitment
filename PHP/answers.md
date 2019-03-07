#### 1. Różnica między public, protected, private

* Public – atrybut jest dostępny z każdego miejsca.
    
* Protected  - atrybut jest widoczny z wnętrza danej klasy i klas dziedziczących.
    
* Private - atrybut jest dostępny tylko z wnętrza danej klasy


#### 2. Dlaczego brak metody getType w klasie Fruit powoduje błąd

Ponieważ klasa AbstractFruit dziedziczy z klasy abstrakcyjnej AbstractPlant, która jest implementacją interfejsu Plant Interface, zawierającego metodę getType.

#### 3. Czym jest klasa abstrakcyjna

* Klasa abstrakcyjna jest klasą nie zawierającą implementacji części (lub wszystkich) metod. Metody abstrakcyjne zawierają jedynie definicję samej metody (widoczność, liczbę i rodzaj argumentów) bez jej kodu.

* Z klasy abstrakcyjnej nie można utworzyć obiektu - tworzy się je z klas dziedziczących zawierających implementacje metod abstrakcyjnych.


#### 4. Co trzeba zmienić w funkcji checkObject by działała poprawnie i dlaczego

Jedną z możliwości jest utworzenie w AbstractPlant statycznej funkcji:
```
public static function checkObject (AbstractPlant $obj):string {
    return $obj->getType();
}

````
Będzie ona dziedziczona w klasach AbstractFruit oraz AbstractVegatable, kolejnie w klasach Potato, Orange, Cabbage, Apple. 
Umożliwia to sprawdzenie $type dla obiektów dziedziczących z AbstractPlant:
````
AbstractPlant::checkObject($object))
````
(patrz index.php)

* ##### 5. Jak można zastosować wyjątki (konstrukcja try cache) by zapobiec błędne wywołania funkcji checkObject (PHP 7 TypeError)
 
Można przerobić metodę checkObject, przykładowo: 
 ````
  public static function checkObject($obj)
 {
 
     if ($obj instanceof AbstractPlant == false) {
         throw new Exception("Obiekt musi pochodzić z klasy dziedzczącej z AbstractPlant");
     }
     if (is_object($obj) == false) {
         throw new Exception("Przekazana zmienna nie jest obiektem");
     }
 
     try {
         return $obj->getType();
     } catch (TypeError $e) {
         exit("ERROR: ".$e->getMessage());
     }
 
 }
 
 ````
 W stworzonym przeze mnie kodzie należałoby wówczas dokonać małych (scalar type declaration, Return type declarations).
