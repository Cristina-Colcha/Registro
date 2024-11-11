## Registro de Usuarios en PHP
    Este es un proyecto simple en PHP que permite a los usuarios ingresar sus datos (cédula, nombre, correo y teléfono) y los almacena en una sesión para mostrarlos en la misma página. La aplicación está construida utilizando PHP puro con una interfaz sencilla en HTML y CSS.

## Características
- Interfaz web con un formulario para ingresar datos de usuario.
- Almacena la información en una sesión de PHP y la muestra en una tabla.
- Verifica que todos los campos estén completos antes de registrar al usuario.
- Muestra todos los usuarios registrados en la misma página.
## Estructura del Proyecto

registro/
│
├── index.php          # Archivo principal que contiene el formulario y la lógica de registro
└── README.md             # Documento de descripción del proyecto (para compartir o colaborar)
## Requisitos
- PHP 7.0 o superior.
- Un navegador web para visualizar el formulario HTML.
## Instrucciones
  
##  Clonar el repositorio
Para clonar este repositorio en tu máquina local, sigue estos pasos:
1. Instala Git si aún no lo tienes instalado. Puedes descargarlo desde este enlace.
2. Abre tu terminal o símbolo del sistema.
3. Navega al directorio donde deseas clonar el proyecto. Usa el comando cd para dirigirte al directorio deseado. Por ejemplo:

    cd ruta/del/directorio
4. Clona el repositorio ejecutando el siguiente comando:

    git clone https://github.com/usuario/registroUsuarios.git
##  Ejecutar el Proyecto
1. Accede al repositorio clonado. Una vez clonado el repositorio, ingresa a la carpeta del proyecto:

    cd registro
2. Ejecuta el archivo index.php directamente en tu navegador. Abre el archivo desde tu navegador:
Ejecuta el siguiente comando en tu terminal para iniciar un servidor de desarrollo PHP en el puerto 8081:

    php -S localhost:8081
Luego, abre en tu navegador la URL http://localhost:8081

3. Usar la aplicación
-  Ingresa los datos de un usuario en el formulario.
-  Haz clic en el botón "Registrar".
La tabla mostrará todos los usuarios registrados hasta el momento.
## Contribuir
Si deseas contribuir al proyecto, sigue los pasos anteriores para clonar el repositorio, crea una nueva rama para tus cambios y luego abre una Pull Request.

1. Crear una rama nueva:

git checkout -b nombre-de-la-rama
2. Realizar los cambios y subirlos:

    git add .
    git commit -m "Descripción de los cambios"
    git push origin nombre-de-la-rama
Luego, abre una Pull Request desde tu rama en GitHub.

Este README incluye las instrucciones para clonar, configurar y ejecutar el proyecto en un entorno local sin un servidor web específico.