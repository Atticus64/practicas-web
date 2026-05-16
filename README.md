# 🌐 Paginas webs

Una aplicación web sencilla desarrollada en PHP.

---

## 📋 Requisitos

- [XAMPP](https://www.apachefriends.org/es/index.html) (o cualquier servidor con soporte PHP)
- PHP 7.4 o superior
- Navegador web moderno

---

## 🚀 Instalación y configuración

### 1. Clonar el repositorio

```bash
git clone https://github.com/Atticus64/practicas-web
```

### 2. Configurar XAMPP (Apache)

Para que Apache sirva los archivos desde la carpeta del repositorio, debes modificar el archivo de configuración `httpd.conf`.

#### Ubicación del archivo:

| Sistema Operativo | Ruta |
|---|---|
| Windows | `C:\xampp\apache\conf\httpd.conf` |
| Linux | `/opt/lampp/etc/httpd.conf` |
| macOS | `/Applications/XAMPP/xamppfiles/etc/httpd.conf` |

#### Cambios a realizar:

Busca la directiva `DocumentRoot` y el bloque `<Directory>` correspondiente, y reemplaza la ruta por la carpeta donde clonaste el repositorio:

```apache
# Antes (valor por defecto de XAMPP)
DocumentRoot "C:/xampp/htdocs"
<Directory "C:/xampp/htdocs">

# Después (apuntando al repositorio)
DocumentRoot "C:/ruta/a/tu/repositorio"
<Directory "C:/ruta/a/tu/repositorio">
```

> **Nota:** En Windows usa `/` en lugar de `\` dentro del archivo de configuración.

### 3. Reiniciar Apache

Después de guardar los cambios, reinicia el servidor Apache desde el panel de control de XAMPP.

### 4. Acceder al proyecto

Abre tu navegador y visita:

```
http://localhost
```

---

## 📁 Estructura del proyecto

```
nombre-del-proyecto/
├── index.php
├── main/
│   └── index.html
└── README.md
```

---

## 🛠️ Uso

Describe aquí cómo usar el proyecto, sus funcionalidades principales y cualquier detalle relevante para el usuario.

---
