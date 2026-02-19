# Projecte MVC – Gestió de tasques 

Aplicació PHP amb patró **MVC**. Llistat i creació de tasques, amb entitat **Categories** relacionada.

## Estructura

```
projecte-mvc/
├── public/
│   ├── index.php
│   └── css/
│       └── main.css
├── controllers/
│   ├── TascaController.php
│   └── CategoryController.php
├── models/
│   ├── TascaModel.php
│   └── CategoryModel.php
├── views/
│   ├── tasques.php
│   ├── tasques_nova.php
│   └── categories.php
├── config/
│   ├── config.php
│   └── db.php
├── sql/
│   └── schema.sql
├── docker/
│   └── Dockerfile
└── docker-compose.yml
```

## Funcionalitats

- **Llistat de tasques** (Pas_a_pas)
- **FASE 1:** Formulari per crear tasques (títol, descripció, categoria)
- **FASE 2:** Categories (Treball, Estudis), llistat de categories, relació amb tasques

## Docker

```bash
docker compose up -d --build
```

**URL:** http://localhost:8080/public/index.php

- Llistat: `index.php`
- Nova tasca: `index.php?action=nova`
- Categories: `index.php?action=categories`


