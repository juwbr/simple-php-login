# Simple-PHP-Login
This is just a simple script you to manage the access to your website.

## Usage
### General
* Add your SQL-Credentials to the config.php
* Create a new table:<br>
```CREATE TABLE accmngr (mail VARCHAR(32) PRIMARY KEY, password VARCHAR(128) NOT NULL);```
### Add user
* Execute the following query in SQL:<br>
``` INSERT INTO accmngr (mail, password) VALUES (<USERNAME>, <HASHED_PASSWORD>); ```
> The password has to be hashed with ```sha3-512```<br>Code to hash via PHP: ```hash('sha3-512',<NON_HASHED_PASSWORD>);```
