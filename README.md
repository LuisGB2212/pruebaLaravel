Clonar Reporsitorio

Git clone https://github.com/LuisGB2212/pruebaLaravel.git

*Ingresar a la ruta 
cd pruebaLaravel

*Instalar dependencias

composer instal

*Crear .env
cp .env.example .env

*Generar Llave de aplicación

php artisan key:generate

*Configurar BASE DE DATOS en .env

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=prueba01
DB_USERNAME=root
DB_PASSWORD=

*Configurar Correo

MAIL_DRIVER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME= correo
MAIL_PASSWORD= contraseña
MAIL_ENCRYPTION=tls
MAIL_FROM_NAME= nombre de aplicación
MAIL_FROM_ADDRESS= correo

Levantar servicio:

php artisan serve --port=8001



