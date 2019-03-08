#### Podstawowe komendy i ich zastosowanie:

1. Utworzenie tabeli create table

    Tworzenie komendy np:
    ```
    CREATE TABLE fruits(
                     id INT PRIMARY KEY AUTO_INCREMENT,
                     name VARCHAR(255) NOT NULL
                     );
                     ```
    
   
2. Dodanie rekordu do tabeli insert

    ```
    INSERT INTO fruits (fruits_name) VALUES ('kiwi')
    ```

3. Zmiana danych w tabeli update

    ```
        UPDATE fruits
        SET fruit_name = 'kiwi'
        WHERE id = 1
    ```

4. Pobranie danych konstrukcja select

    ```
        select fruit_name from fruits
        where id = 1
    ```

5. Łączenie tabel konstrukcja join, inner join, left join, right join

    * inner join (lub samo join) - wiersze, które spełniają podany warunek    
        ```
           SELECT * FROM customers JOIN addresses ON
           customers.customer_id=addresses.customer_id
        ```
        
    * left join -  zwraca jako wynik wszystkie wiersze z lewej tabeli. Dane z prawej tabeli zostaną dołączone tylko w rzędach spełniających warunek
       ```
            SELECT * FROM customers LEFT JOIN addresses
            customers.customer_id=addresses.customer_id
       ```
        
    * right join - zwraca jako wynik wszystkie wiersze z prawej tabeli. Dane z prawej zostaną dołączone tylko w rzędach spełniających warunek.
        ```
            SELECT * FROM customers RIGHT JOIN addresses ON
            customers.customer_id=addresses.customer_id
        ```
        
6. Zawężenie rekordów słowo kluczowe „where”

    ```
        SELECT * FROM users
        WHERE user_name = "Tom"
    ```

7. wykorzystanie podzapytania konstrukcja „in”
    
    Pozwala określić wiele wartości w klauzuli WHERE np:
    
    ```
        SELECT * FROM users
        WHERE city IN ('Warszawa', 'Kraków', 'Pipidówka', 'Capanowo')
    ```

8. Słowa kluczowe „order by” oraz „limit”
    
    Limit - ustawia limit rekordów do wyświetlania
    Order - sortuje znalezione wyniki względem jednej kolumny 
    
    ```
        SELECT * FROM users
        ORDER BY name
        Limit 501
    ```
    
9. Grupowanie i agregacja wyników słowa kluczowe „group by”
    
    GROUP BY - sortuje zestaw wyników.
    ```
        SELECT nazwa, SUM(cena * ilość) as sprzedaz
        FROM zamowienia
        GROUP BY nazwa
    ```

##
 
 