# BAMBUB2B_Pureba_Tecnica
Repositorio contenedor de la prueba tecnica de mi postulacion a BAMBUB2B


INSTRUCCIONES
El entorno de trabajo fue montado con XAMPP 8.0.3, Version del Control Panel: 3.2.4
\#################################################################################################


DATOS DEL SERVIDOR UTILIZADO

- Tipo de servidor: MariaDB
- Versión del servidor: 10.4.17-MariaDB - mariadb.org binary distribution
- Versión del protocolo: 10
- Apache/2.4.46 (Win64) OpenSSL/1.1.1h PHP/7.4.13
- Versión del cliente de base de datos: libmysql - mysqlnd 7.4.13
- Versión de PHP: 7.4.13


\#################################################################################################
phpMyAdmin \
Acerca de esta versión: 5.0.4, versión estable más reciente: 5.1.0

\#################################################################################################

USO:
- Importar el SQL de la carpeta BD a la base de datos MySQL
- Incluir en la carpeta htdocs de XAMPP el resto de carpetas y archivos
- Abrir una pagina web e ir a la direccion "localhost/nombre_dado" o "127.0.0.1/nombre_dado"
\

El "nombre_dado" por defecto es BAMBUB2B, que corresponde al nombre de la carpeta que contiene todo el programa

\#################################################################################################
Observaciones:
- El código puede optimizarse tanto en legibilidad como seguridad, principalmente en seguridad\
 quitando las consultas a la BD del php principal y encapsularlas en otro archivo
- El código actualmente es modular a la cantidad de datos que se incluyan en la base de datos\
siempre que estos estén dentro de los rangos definidos en la sentencia SQL
