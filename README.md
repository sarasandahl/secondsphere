# secondsphere
Slutprojekt Systemutveckling PHP
PHP enligt OOP, HTML output, Enligt MVC, PDO, MySQL-databasm validering och sanering

Beskrivning
En hemsida för andrahandsförsäljning av secondhandkläder. Vi sköter försäljningen och tar en procentuell avgift av försäljningen.

Uppgift
Vi ska bygga en första prototyp för att illustrera några av de grundläggande funktionerna:
1. Lista säljare alfabetiskt
2. Lista plagg
3. Lägg till plagg
4. Lägg till säljare (den som lämnade in plagget)
5. Markera ett plagg som sålt
6. Visa information om säljaren:
- antal inlämnade plagg
- antal sålda plagg
- totala försäljningssumman
- alla plagg som säljaren lämnat in
Denna webbtjänst ska vidareutvecklas så vi behöver tänka skalbart och designa en databas som kan hantera ytterligare funktioner i framtiden.

Framtida funktioner
1. I listan med plagg se hur många dagar som plagget varit inlämnat
2. Visa logg på händelser i webbtjänsten med tid och datum för händelsen

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