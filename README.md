# MobileIA Firebase Expressive
Libreria para utilizar Firebase en Zend Expressive.

1. Incluir libreria:
```bash
composer require mobileia/mia-firebase-expressive
```
2. Incluir configuración en el archivo: "config/config.php"
```php
// Configurar Modulo Mobileia Auth
\Mobileia\Expressive\Firebase\ConfigProvider::class,

// Default App module config
//App\ConfigProvider::class,
```
3. Crear archivo de configuracion: "config/autoload/mobileia-lab.global.php":
```php
return [
    'mia_firebase' => [
        'api_key' => 'XXXXXXXXXX'
    ]
];
```