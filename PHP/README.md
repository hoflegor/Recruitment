# Zagadnienia z PHP:

* ## Zadania rozwiązane w ```index.php``` oraz ``arrays.php``.
* ## Odpowiedzi na pytania w pliku <a href="https://github.com/hoflegor/Recruitment/blob/master/PHP/answers.md">```answers.md```</a>. 


#### Tworzenie klas i obiektów

1. Utworzenie interfejsu PlantInterface zawierającą metodę getType

2. Utworzenie klasy abstrakcyjnej Plant definiowanej przez interfejs PlantInterface

3. Dodanie atrybutu type jako protected. Atrybut „type” w dalszej części kodu powinien przyjmować wartości „Cabbage”, „Potato”, „Apple” , „Orange”, „Other”  - domyślnie „Other”
</s>
4. Utworzenie klas abstrakcyjnej Fruit, Vegetable rozszerzających klasę Plant

5. Utworzenie klas Apple, Orange dziedziczących po Fruit

6. Utworzenie klas Cabbage, Potato dziedziczących po Vegetable
 
7. Przypisanie w klasach wartości type w możliwie różny sposób.
 
8. Dodanie metody statycznej make w klasie Orange – metoda powinna zwrócić wartość „orange juice”

9. Dodanie funkcji checkObject
```
function checkObject (Fruit $obj){
return $obj->getType();                
}
```

##

1.Utworzyć obiekty klas Cabbage, Potato, Apple

2.Wywołać metodę getType

3.Wywołać funkcję checkObject dla utworzonych obiektów

4.Wywołanie metody statycznej make z klasy Orange

## 

#### Pytania do zadania:

1. Różnica między public, protected, private

2. Dlaczego brak metody getType w klasie Fruit powoduje błąd

3. Czym jest klasa abstrakcyjna

4. Co trzeba zmienić w funkcji checkObject by działała poprawnie i dlaczego

5. Jak można zastosować wyjątki (konstrukcja try cache) by zapobiec błędne wywołania funkcji checkObject (PHP 7 TypeError)
 
* Odpowiedzi na pytania w pliku <a href="https://github.com/hoflegor/Recruitment/blob/master/PHP/answers.md">answers.md</a>
 
##
 
#### Operacje na tablicach danych / tablicach obiektów

1. Utwórz tablicę danych zawierającą listę użytkowników

2. Wykonaj iterację po elementach tej tablicy dopisując losowy owoc lub warzywo z poprzedniego zadania jako wartość

3. Posortuj alfabetycznie otrzymaną tablicę

4. Następnie usuń użytkowników, którzy mają przypisany owoc jabłko klasa „Apple”

5. Wyświetl listę pozostałych użytkowników w tablicy wraz z owocami jakie posiadają
