## Requirement

- Xampp Versi 7.4

## Instalasi

1. Clone atau download repo ini
2. Extract dan letakkan folder di dalam folder **htdocs** xampp
3. Nyalakan apache dan phpmyadmin
4. Import database yang berada dalam folder db
5. Konfigurasi settingan database pada file **utils/koneksi.php** pada function \_\_construct
   utils/koneksi.php

```
function __construct($server = "localhost", $username="root", $password="", $database="db_lsp")
    {
        $this->server = $server;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }
```
