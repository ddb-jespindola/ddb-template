# 1. DDB-template

Tema de Wordpress personalizado para el sitio web de la Empresa Deposito de Drogas Boyaca.

# 2. Requisitos

Para trabajar con este Tema en un entorno local, es necesario: 

- [NodeJS](https://nodejs.org/es/download/) y NPM
- Servidor apache (XAMPP, Laragon (recomendado ), etc).
- Sistema de versiones [GIT](https://git-scm.com/downloads).
- Instalacion limpia de [Wordpress](https://es-co.wordpress.org/download/)
- Compilador de SASS [Laravel-Mix](https://laravel-mix.com/docs/5.0/installation) (instrucciones de instalacion y uso abajo).
- [Plugin](https://es.wordpress.org/plugins/all-in-one-wp-migration/) de migracion de Wordpress para descargar el sitio web completo.

# 3. Instalacion en local

1. Con el plugin All-in-One WP Migration instalado, o en su defecto por FTP, descargar todos los archivos del hosting y hacer la importacion mediante el plugin en la instalacion local de Wordpress.

2. Exportar la base de datos del hosting e importarla en local.

3. Crear la carpeta :UBICACION WORDPRESS\wp-content\themes\ddb-theme; en esta ubicacion se clonara el [repositorio-Github](https://github.com/ddb-jespindola/ddb-template) que contiene el tema de DDB.

3. Configuracion de Laravel Mix:
    - Con NodeJS y NPM instalado, seguir las instrucciones de la pagina oficial de [Laravel-Mix](https://laravel-mix.com/docs/5.0/installation).
    - En el archivo webpackmix.js debe reemplazarse esta linea: mix.js('assets/js/app.js', 'dist/').sass('assets/css/sass/main.scss', 'assets/css/'); 
    - Para compilar los archivos SASS, en la terminal, se ejecuta el comando 'npm run watch' para ver los cambios en vivo o 'npm run production' para optimizar el CSS final y subirlo a Github.

# 4. Recomendaciones

 - El sitio de pruebas de Hostinger se encuentra en la carpeta staging, con el subdominio [staging.ddboyaca.com](http://staging.ddboyaca.com/).
 - Para subir cambios al repositorio de Github, debe hacerse primero al branch 'develop', el cual esta ligado al sitio de staging.
 

