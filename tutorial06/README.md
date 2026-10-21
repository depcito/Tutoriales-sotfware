Tutorial 06 Ingeniería de Software
Profesor Daniel Correa
Samuel Hernando Echeverri Castrillon

## Requisitos

- Node 26

## Cómo ejecutar el proyecto

```
cd randomquotes
npm install
node index.js
```

Abrir http://localhost:3000/

## Docker (punto D)

Antes de construir la imagen, cambiar `const port = 3000` por `const port = 80` en `index.js`.

```
docker build -t randomquotes .
docker run -d -p 80:80 randomquotes
```

## Despliegue

IP de la VM: http://34.56.93.49/
