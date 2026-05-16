
# Prácticas Pendientes

Este archivo describe todas las prácticas que deben implementarse en el proyecto.
Cada práctica vive en su propia carpeta (`practica19/`, `practica20/`, etc.) y es independiente.

---

## 📌 Estructura general esperada

```
.
├── index.php              # Menú raíz — lista todas las prácticas y el módulo biblioteca
├── biblioteca/            # Módulo extra: sistema CRUD de biblioteca (alumnos, artículos, préstamos)
├── practica19/
├── practica20/
├── practica21/
│   └── ...
└── practica37/
```

El módulo `biblioteca/` es un ejemplo extra de CRUD completo con PHP + MySQL, independiente de las prácticas numeradas.

---

## 🟡 Prácticas pendientes

---

### Práctica 19
**Salidas de texto en JavaScript**

Escribe un documento HTML en el cual utilices las diferentes formas de salidas de texto en JavaScript. Utiliza como ejemplo de salida tus datos personales.

- Tecnologías: HTML, JavaScript vanilla
- Referencias:
  - https://www.w3schools.com/js/js_output.asp
- Carpeta: `practica19/`
- Archivo principal: `practica19/index.html`

---

### Práctica 20
**Variables y operaciones aritméticas**

Escribe un documento HTML y JavaScript en el cual declares 2 variables y les asignes valores. Con esas variables imprime en la página web la suma, resta, división y exponenciación de los valores.

- Tecnologías: HTML, JavaScript vanilla
- Referencias:
  - https://www.w3schools.com/js/js_output.asp
  - https://www.w3schools.com/js/js_arithmetic.asp
- Carpeta: `practica20/`
- Archivo principal: `practica20/index.html`

---

### Práctica 21
**Operaciones aritméticas con formulario**

Retoma la práctica 20. Realiza los mismos cálculos (suma, resta, división, exponenciación) pero ahora usando formularios, cajas de texto y un botón para ejecutar cada operación aritmética.

- Tecnologías: HTML, JavaScript vanilla
- Carpeta: `practica21/`
- Archivo principal: `practica21/index.html`

---

### Práctica 22
**Fórmula general (ecuación cuadrática)**

Escribe un documento HTML y JavaScript que muestre un formulario para capturar los valores a, b y c de la fórmula general. Un botón debe calcular y mostrar los valores de x1 y x2 en un mensaje.

- Fórmula: `x = (-b ± √(b²- 4ac)) / 2a`
- Tecnologías: HTML, JavaScript vanilla
- Carpeta: `practica22/`
- Archivo principal: `practica22/index.html`

---

### Práctica 23
**Índice de Masa Corporal (IMC)**

Escribe un documento HTML y JavaScript con un formulario que calcule el IMC para una mujer. Muestra el valor del IMC y el grado (bajo peso, normal, sobrepeso, obesidad).

- Tecnologías: HTML, JavaScript vanilla
- Carpeta: `practica23/`
- Archivo principal: `practica23/index.html`

---

### Práctica 24
**Fecha actual con switch**

Escribe un documento HTML y JavaScript que imprima la fecha actual en el formato:
`Hoy es martes 24 de Marzo del año 2026`
Usa la condición `switch` para el nombre del día y del mes.

- Tecnologías: HTML, JavaScript vanilla
- Carpeta: `practica24/`
- Archivo principal: `practica24/index.html`

---

### Práctica 25
**Tablas de multiplicar del 1 al 10**

Escribe un documento HTML, CSS y JavaScript. Al dar clic en el botón "Generar tablas de multiplicar", se muestran las tablas del 1 al 10 usando ciclos de JavaScript.

- Tecnologías: HTML, CSS, JavaScript vanilla
- Carpeta: `practica25/`
- Archivo principal: `practica25/index.html`

---

### Práctica 26
**Tablas de multiplicar hasta N**

Igual que la práctica 25, pero el usuario especifica un número positivo entero. Al dar clic en el botón, se muestran las tablas del 1 hasta el número indicado.

- Tecnologías: HTML, CSS, JavaScript vanilla
- Carpeta: `practica26/`
- Archivo principal: `practica26/index.html`

---

### Práctica 27
**Menú de prácticas 21–26 en PHP (servidor)**

Escribe un documento HTML, CSS y PHP con un menú que enlace a las prácticas 21–26, pero ahora toda la lógica se implementa del lado del servidor con PHP (equivalente a lo hecho en JavaScript en prácticas anteriores).

- Tecnologías: HTML, CSS, PHP vanilla
- Carpeta: `practica27/`
- Archivo principal: `practica27/index.php`
- Subcarpetas: `practica27/p21/`, `practica27/p22/`, ... `practica27/p26/`

---

### Práctica 28
**Convertidor Celsius a Fahrenheit**

Aplicación web que lee una temperatura en Celsius desde un formulario y la convierte a Fahrenheit.

- Fórmula: `Fahrenheit = Celsius * 9/5 + 32`
- Ejemplo: entrada `25` → salida `25 Celsius = 77.0 Fahrenheit`
- Tecnologías: HTML, PHP vanilla
- Carpeta: `practica28/`
- Archivo principal: `practica28/index.php`

---

### Práctica 29
**Par o Impar**

Aplicación web que lee un número desde un formulario e imprime "Par" si es divisible entre 2, o "Impar" si no lo es.

- Ejemplo: entrada `7` → salida `Impar`
- Tecnologías: HTML, PHP vanilla
- Carpeta: `practica29/`
- Archivo principal: `practica29/index.php`

---

### Práctica 30
**Nombre de usuario e iniciales**

Aplicación web que lee un nombre y un apellido desde un formulario. Genera el nombre de usuario (nombre+apellido en minúsculas, sin espacio) y las iniciales en mayúsculas.

- Ejemplo: entrada `Juan Lopez` → salida `Nombre de usuario: juanlopez / Iniciales: JL`
- Tecnologías: HTML, PHP vanilla
- Carpeta: `practica30/`
- Archivo principal: `practica30/index.php`

---

### Práctica 31
**¿Puede votar?**

Aplicación web que lee un nombre y una edad desde un formulario. Si la persona tiene 18 años o más imprime `[nombre] puede votar.`, si no `[nombre] no puede votar.`

- Ejemplo: entrada `María, 25` → salida `Maria puede votar.`
- Tecnologías: HTML, PHP vanilla
- Carpeta: `practica31/`
- Archivo principal: `practica31/index.php`

---

### Práctica 32
**Calificación con letra**

Aplicación web que lee una puntuación (0–100) desde un formulario y la convierte a letra usando `if / elseif / else`:

- 90 o más → A
- 80–89 → B
- 70–79 → C
- 60–69 → D
- menos de 60 → F

- Ejemplo: entrada `85` → salida `B`
- Tecnologías: HTML, PHP vanilla
- Carpeta: `practica32/`
- Archivo principal: `practica32/index.php`

---

### Práctica 33
**Anagramas**

Aplicación web que lee dos palabras en minúsculas desde un formulario y determina si son anagramas (mismas letras, misma cantidad). Imprime "Sí" o "No".

- Ejemplo: entrada `listen` y `silent` → salida `Sí`
- Tecnologías: HTML, PHP vanilla
- Carpeta: `practica33/`
- Archivo principal: `practica33/index.php`

---

### Práctica 34
**Tipo de cambio**

Aplicación web que lee una cantidad y una tasa de cambio desde un formulario. Multiplica cantidad × tasa e imprime el resultado con 2 decimales.

- Ejemplo: entrada `100` y `0.85` → salida `El resultado es 85.00`
- Tecnologías: HTML, PHP vanilla
- Carpeta: `practica34/`
- Archivo principal: `practica34/index.php`

---

### Práctica 35
**Convertidor de segundos**

Aplicación web que lee un número total de segundos desde un formulario y lo convierte a horas, minutos y segundos.

- Ejemplo: entrada `3661` → salida `3661 segundos corresponden a 1h, 1m y 1s`
- Tecnologías: HTML, PHP vanilla
- Carpeta: `practica35/`
- Archivo principal: `practica35/index.php`

---

### Práctica 36
**CRUD de usuarios con base de datos**

Aplicación web con las siguientes opciones:
1. Registrar usuario
2. Consultar usuario
3. Modificar usuario
4. Eliminar usuario

Campos de la tabla en MySQL:
- Nombre(s)
- Apellido(s)
- Correo electrónico
- Contraseña (guardar con hash, no en texto plano)

- Tecnologías: HTML, CSS, PHP vanilla, MySQL (PDO)
- Carpeta: `practica36/`
- Archivo principal: `practica36/index.php`
- Incluir: `practica36/db.php` con la conexión PDO y el `CREATE TABLE` SQL listo

---

### Práctica 37
**Login con sesiones PHP**

Aplicación web con un formulario de inicio de sesión (correo + contraseña). Los datos se verifican contra la tabla de usuarios de la práctica 36. Si coinciden, se inicia una sesión PHP y se muestra una sección exclusiva para usuarios autenticados (la única forma de verla es habiendo iniciado sesión). Incluir también opción de registro de usuario.

- Tecnologías: HTML, CSS, PHP vanilla, MySQL (PDO), sesiones PHP
- Referencia: https://www.w3schools.com/php/php_sessions.asp
- Carpeta: `practica37/`
- Archivos principales:
  - `practica37/index.php` — formulario de login
  - `practica37/registro.php` — formulario de registro
  - `practica37/dashboard.php` — sección exclusiva (requiere sesión activa)
  - `practica37/logout.php` — cerrar sesión
  - `practica37/db.php` — conexión PDO (puede reutilizar la de practica36)

---

## ✅ Módulo extra: Biblioteca

Sistema CRUD completo de ejemplo. No es una práctica numerada, es un módulo de referencia.

- Carpeta: `biblioteca/`
- Módulos: alumnos, artículos, préstamos
- Tecnologías: HTML, CSS, PHP vanilla, MySQL (PDO)
- Ver detalles de implementación en el prompt principal del proyecto

---

## 📝 Notas para OpenCode

- Cada práctica es **independiente**: no depende del código de otra (excepto practica37 que usa la DB de practica36)
- Usar **PHP vanilla** en las prácticas 27–37, sin frameworks
- Usar **JavaScript vanilla** en las prácticas 19–26, sin librerías externas
- El `index.php` raíz debe listar todas las prácticas y el módulo biblioteca con links directos
- Las prácticas 36 y 37 comparten base de datos; documentar bien la conexión
