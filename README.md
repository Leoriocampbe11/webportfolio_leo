# Portfolio Leo C. Fonkeng

Este proyecto es una aplicación de portafolio en PHP que se conecta a una base de datos MySQL para almacenar o mostrar información de manera dinámica. 

## Descripción

Este archivo `index.php` establece una conexión con una base de datos MySQL y luego carga una página web de portafolio. La interfaz utiliza Bootstrap para una visualización responsiva y jQuery para funciones interactivas.

## Requisitos Previos

- **Servidor Web**: Apache, Nginx, o cualquier servidor que soporte PHP.
- **PHP**: Version 7.0 o superior.
- **Base de datos MySQL**.
- **Conexión a Internet** para cargar las hojas de estilo y scripts externos (Bootstrap y jQuery).

## Configuración

1. **Clonar el repositorio** o copiar los archivos a tu servidor web.
2. **Configurar la Base de Datos**:
   - Crea una base de datos MySQL con el nombre `portfolio` o elige otro nombre y actualiza el archivo `index.php` en la variable `$database`.
   - Configura un usuario de MySQL con acceso a la base de datos y actualiza `$username` y `$password` en el archivo `index.php`.

3. **Ajustar Parámetros de Conexión en `index.php`**:
   - Abre `index.php` y reemplaza los valores de conexión:
     ```php
     $servername = "localhost"; // Cambia "localhost" si tu servidor es diferente
     $username = "root"; // Cambia "root" por tu usuario de MySQL
     $password = ""; // Cambia "" por la contraseña de MySQL
     $database = "portfolio"; // Cambia "portfolio" por el nombre de tu base de datos
     ```

## Uso

1. **Ejecutar el Servidor**: Asegúrate de que el servidor web esté funcionando.
2. **Abrir la Página**: En un navegador, visita `http://localhost/index.php` o la URL correspondiente.
3. **Verificar Conexión**: Si la conexión a la base de datos es exitosa, verás el mensaje "Conexión exitosa a la base de datos".

## Personalización

- **Estilos**: Puedes modificar los estilos en la sección `<style>` del archivo `index.php`.
- **Contenido**: Personaliza el contenido de la página HTML según el portafolio que quieras presentar.

## Dependencias

- **Bootstrap** (v5.3.3): Para el diseño responsivo.
- **jQuery** (v3.6.0): Para funcionalidades interactivas en la página.

## Licencia

Este proyecto está licenciado bajo la [MIT License](https://opensource.org/licenses/MIT).

---

