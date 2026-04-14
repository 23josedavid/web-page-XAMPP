# 📝 Notes App - Aplicación de Notas  

## 📌 Descripción  
Esta es una aplicación web desarrollada en PHP que permite a los usuarios gestionar sus propias notas de forma sencilla.  

El sistema incluye funcionalidades de autenticación y acceso restringido, asegurando que cada usuario solo pueda interactuar con su propia información.  

### Los usuarios pueden:
- Registrarse e iniciar sesión 🔐  
- Acceder a una sección privada de notas 📝  
- Crear nuevas notas ✍️  
- Editar notas existentes 🔄  

---

## ⚠️ Consideraciones importantes  
- No existe funcionalidad para eliminar notas  
- No hay opción de cierre de sesión (logout) implementada  
- La sesión se finaliza manualmente eliminando las cookies del navegador  
- La sección de notas solo está disponible para usuarios autenticados  

---

## 🛠️ Tecnologías utilizadas  
- PHP 8+  
- MySQL / SQLite  
- HTML  
- CSS  

---

## ⚙️ Funcionalidades principales  

### 👤 Autenticación  
- Registro de usuarios  
- Inicio de sesión  
- Protección de acceso a secciones privadas  

### 📝 Gestión de notas  
- Creación de notas  
- Edición de notas  
- Visualización de notas  

---

## 🔒 Control de acceso  
- Solo los usuarios autenticados pueden acceder a la sección de notas  
- Los usuarios no autenticados no pueden visualizar ni interactuar con el contenido privado  

---

## 📥 Guía de instalación  

### 1. Clonar el repositorio  
Abre la terminal y ejecuta:  
```bash
https://github.com/23josedavid/web-page-XAMPP.git
```

### 2. Acceder a la carpeta del proyecto  
```bash
cd demo
```

### 3. Configurar el entorno local  
Asegúrate de tener instalado un servidor local como:  
- XAMPP  

### 4. Configurar la base de datos  
- Crea una base de datos en phpMyAdmin o MySQL  
- Configura las credenciales en el archivo correspondiente del proyecto  

### 5. Ejecutar el proyecto  
- Coloca la carpeta del proyecto dentro de `htdocs` (XAMPP)  
- Inicia Apache y MySQL desde el panel de control  
- Abre tu navegador y accede a:  

```
http://demo.local:8888/
```

### 6. Probar la aplicación  
- Regístrate como nuevo usuario  
- Inicia sesión  
- Accede a la sección de notas  

---

## ⚠️ Limitaciones  
- No hay sistema de cierre de sesión  
- No se pueden eliminar notas  
- Proyecto enfocado en aprendizaje y práctica de desarrollo backend  

---

## 👨‍💻 Autor  
Desarrollado por **23josedavid**  

---
