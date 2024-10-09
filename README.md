# CMS

Los CMS (Content Management System), como lo indican sus siglas en inglés, son sistemas de gestión de contenidos los cuales permiten crear, administrar y publicar una página web en Internet sin necesidad de contar con demasiados conocimientos de programación. Hay muchos CMS en la web, cada uno con sus ventajas y desventajas, en este repositorio utilizaremos el CMS de WordPress.

## Requisitos Previos

Antes de instalar WordPress, necesitamos contar con PHP instalado y una base de datos local para importar el archivo SQL que contiene el contenido del sitio, por este motivo recomendamos instalar un servidor local como XAMPP que cuenta con estas tecnologias:

- **Servidor Web Local**: [XAMPP](https://www.apachefriends.org/index.html)

## Instalación

Sigue estos pasos para instalar el proyecto en tu entorno local.

### Paso 1: Clonar el repositorio

Clona este repositorio en la carpeta `htdocs` de tu instalación de XAMPP o el equivalente en tu servidor local.

```bash
 git clone --branch CMS --single-branch https://github.com/CalderonExe22/PixGallery_fi.git
```

### Paso 2: Iniciamos los servicios de Apache y MySQL en XAMPP o tu servidor local elegido
![xampp](https://github.com/user-attachments/assets/ad4585a5-ed4d-4479-9aba-d425f5636d16)

### Paso 3: Creamos una base de Datos `pix_gallery_fi_2` en PHPMyAdmin
![CDB2](https://github.com/user-attachments/assets/83eb015b-5f85-4e8f-842f-2f1ec9117db9)

### Paso 4: Importamos la base de Datos `pix_gallery_fi_2.sql` ubicada en `C:\xampp\htdocs\PixGallery_fi\pix_gallery_fi_2.sql`
![IBD](https://github.com/user-attachments/assets/6a033f37-8b2b-460b-94df-6fd81aae5d23)
![base_date_2](https://github.com/user-attachments/assets/48172fd2-2ee0-4fb7-865b-323ccb6753a1)

### Paso 5: Accedemos a la siguiente ruta para ver el Proyecto:

```bash
http://localhost/PixGallery_fi
```
