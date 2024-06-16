# Proyecto 2: Prestashop Docker Compose

Este repositorio contiene el desarrollo del proyecto 2 de Administración de Redes

## Instalación

Ejecutar los siguientes comandos

Primero se debe cambiar la ip externa a utilizar en la página de Prestashop en el archivo ip_prestashop.env

```bash
PRESTASHOP_IP= <tu_ip_de_prestashop>
```
Luego ejecutar los siguientes comandos
```bash
docker-compose up -d
sh change_ip.sh
```

## Uso

Tu página de Prestashop debería estar activa en la ip que proporcionaste en el archivo ip_prestashop.env