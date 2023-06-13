# secondsphere
Slutprojekt Systemutveckling PHP
PHP enligt OOP, HTML output, Enligt MVC, PDO, MySQL-databasm validering och sanering

Case
En secondhandbutik NAMN behöver en webbtjänst för att hålla koll på sina plagg och vem som lämnat in dem. Detta är en sådan butik där en person (vi kallar dem säljare) kan lämna in kläder och butiken säljer dem, tar en viss del av försäljningen och en viss del går tillbaka till den som lämnar in kläderna (säljaren).

Uppgift
Vi ska bygga en första prototyp för att illustrera några av de grundläggande funktionerna:
1. Lista säljare alfabetiskt CHECK
2. Lista plagg CHECK
3. Lägg till plagg CHECK
4. Lägg till säljare (den som lämnade in plagget) CHECK
5. Markera ett plagg som sålt CHECK
6. Visa information om säljaren:
- antal inlämnade plagg 
- antal sålda plagg CHECK
- totala försäljningssumman CHECK
- alla plagg som säljaren lämnat in CHECK
Denna webbtjänst ska vidareutvecklas så vi behöver tänka skalbart och designa en databas som kan hantera ytterligare funktioner i framtiden.

Framtida funktioner
1. I listan med plagg se hur många dagar som plagget varit inlämnat CHECK
2. Visa logg på händelser i webbtjänsten med tid och datum för händelsen CHECK

Databasstruktur:
schema: secondsphere

tabeller:
users
id (PK) INT
first_name VARCHAR 20
last_name VARCHAR 20
email VARCHAR 50
updated timestamp CURRENT_TIMESTAMP	ON UPDATE CURRENT_TIMESTAMP

items
id (PK) INT
product_name VARCHAR 50
image VARCHAR 1000
brand VARCHAR 20
type VARCHAR 20
description VARCHAR 100
size VARCHAR 20
price INT
updated timestamp CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
userId (FK) INT
kvaliteId (FK) INT

conditions
id (PK) INT
quality VARCHAR 30
description VARCHAR 200

kvalité in i items? Egen tabell?


Relationer:
Bgränsningnamn - user-item | userId | secondsphere | users | id
Begränsningsnamn - condition-item | conditionsId | secondsphere | conditions | id


Bild url:er:
Jeans på galge: 
https://images.unsplash.com/photo-1602293589930-45aad59ba3ab?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8cGFudHN8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=900&q=60

väska: 
https://images.unsplash.com/photo-1598532163257-ae3c6b2524b6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8aGFuZGJhZ3xlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=900&q=60

Flera Jeans på galge: 
https://images.unsplash.com/photo-1576995853123-5a10305d93c0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fHBhbnRzfGVufDB8fDB8fHww&auto=format&fit=crop&w=900&q=60

