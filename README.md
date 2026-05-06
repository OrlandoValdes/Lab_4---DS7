# 📦 Documentacion de Laboratorio #4 de Desarrollo de Software 7 - Autocarga Automatizada con Composer (PSR-4)

Este proyecto demuestra la implementación del estándar PSR-4 para la autocarga de clases en PHP utilizando Composer. 
El objetivo es estructurar correctamente un proyecto orientado a objetos, eliminando la necesidad de require manuales y mejorando la organización del código.

---

## 🚀 Guía de Instalación

Sigue estos pasos para ejecutar el proyecto correctamente:

### 1️⃣ Clonar el repositorio

```bash
git clone https://github.com/OrlandoValdes/Lab_4---DS7.git
cd Lab_4---DS7
```

### 2️⃣ Instalar dependencias con Composer

```bash
composer install
```

Este comando:
- Crea la carpeta vendor/
- Genera el archivo vendor/autoload.php
- repara el sistema de autocarga

### 3️⃣ Actualizar el autoload (si realizas cambios)

```bash
composer dump-autoload
```

Utiliza este comando cuando:
- Crees nuevas clases
- Cambies namespaces
- Muevas archivos entre carpetas

### 4️⃣ Ejecutar el proyecto

```bash
php index.php
```

---

## 🗂️ Estructura de Archivos

El proyecto sigue la convención PSR-4, donde los namespaces reflejan la estructura de carpetas.

/proyecto
│
├── composer.json
├── index.php
├── /vendor
│   └── autoload.php
│
└── /src
    ├── /Models
    │   └── Usuario.php
    │
    ├── /Controllers
    │   └── UsuarioController.php
    │
    └── /Services
        └── UsuarioService.php

### 📌 Relación Namespace ↔ Carpetas

| Carpeta Física   | Namespace        |
|------------------|------------------|
| src/             | App\             |
| src/Models/      | App\Models       |
| src/Controllers/ | App\Controllers  |
| src/Services/    | App\Services     |

### 🔧 Ejemplo en composer.json

```json
{
  "autoload": {
    "psr-4": {
      "App\\": "src/"
    }
  }
}
```
---

## ▶️ Pruebas de Ejecución

Teniendo en User.php:

```PHP
<?php

namespace App;

Class User
{
    public function getName():string
    {
        return "Dave";
    }
}
```

y en ProductModel.php:

```PHP
<?php

namespace Database\Models;

class ProductModel
{
    public function getId() : int
    {
        return 123;
    }
}
```

y aplicando en la terminal:

![image alt](https://github.com/OrlandoValdes/Lab_4---DS7/blob/master/Capturas/Captura_Autoload_ComposerInstall.png?raw=true)

Ejecutando index.php obtendriamos esto:

![image alt](https://github.com/OrlandoValdes/Lab_4---DS7/blob/master/Capturas/Captura_Autoload_Index.png?raw=true)

### 🔍 ¿Qué está pasando?

- No se usa require manual para la clase Usuario

- Composer automáticamente localiza el archivo:

```bash
src/Models/Usuario.php
```

- Gracias al mapeo definido en composer.json

---

## 🧠 Conclusiones Técnicas

### 1. 🔧 Mantenibilidad

El uso de PSR-4 permite agregar nuevas clases sin modificar configuraciones globales.
Solo basta con:

- Crear el archivo
- Definir correctamente el namespace

Esto reduce errores y mejora la escalabilidad del proyecto.

### ⚡ Eficiencia de Memoria (Lazy Loading)

Composer implementa carga bajo demanda:

- Las clases no se cargan todas al inicio
- Solo se cargan cuando se utilizan

Esto mejora:

- Rendimiento del servidor
- Uso de memoria

### 📏 Estandarización (PSR-4)

Seguir PSR-4 aporta múltiples beneficios:

- Código uniforme y predecible
- Facilita el trabajo en equipo
- Compatible con frameworks modernos como Laravel y Symfony
- Reduce la curva de aprendizaje para nuevos desarrolladores

---

## 📜 Referencias

1. Composer. (2026). *Composer Documentation*. https://getcomposer.org/doc/
2. PSR -4.pptx (Material suministrado para el laboratorio)
3. Carga Automática en PHP.pptx (Material suministrado para el laboratorio)

---

## ⏱️ Fecha de Ejecución del Laboratorio

Martes 5 de mayo de 2026

---

<p align="center">
Este laboratorio ha sido desarrollado por el estudiante de la Universidad 
Tecnológica de Panamá: <br>
Nombre: Orlando Antonio Valdés Bernal<br>
Correo: orlando.valdes2@utp.ac.pa<br>
Curso: Desarrollo de Software 7 - 1GS131<br>
Instructor del Laboratorio: Irina Fong.
</p>
