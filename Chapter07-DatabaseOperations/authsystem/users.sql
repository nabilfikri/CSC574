CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    fullname VARCHAR(255) NOT NULL,
    email VARCHAR(100),
    role VARCHAR(50),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

select customerName from customers LIMIT 10;

+------------------------------+
| customerName                 |
+------------------------------+
| Atelier graphique            |
| Signal Gift Stores           |
| Australian Collectors, Co.   |
| La Rochelle Gifts            |
| Baane Mini Imports           |
| Mini Gifts Distributors Ltd. |
| Havel & Zbyszek Co           |
| Blauer See Auto, Co.         |
| Mini Wheels Co.              |
| Land of Toys Inc.            |
+------------------------------+

mysql> SELECT customerName FROM customers LIMIT 3 OFFSET 1;
mysql> SELECT customerName FROM customers LIMIT 1, 3;
+----------------------------+
| customerName               |
+----------------------------+
| Signal Gift Stores         |
| Australian Collectors, Co. |
| La Rochelle Gifts          |
+----------------------------+