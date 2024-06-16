#!/bin/bash

# Verificar si la variable de entorno PRESTASHOP_IP está establecida

if [ -z "$PRESTASHOP_IP" ]; then
  echo "La variable de entorno PRESTASHOP_IP no está establecida."
  exit 1
fi

echo "Variable PRESTASHOP_IP $PRESTASHOP"
echo "Esperando a que servicio mysql esté activo"

echo "Estableciendo variables de entorno"

# Configuración de conexión a la base de datos
DB_USER="root"
DB_PASSWORD=$MYSQL_ROOT_PASSWORD
DB_NAME="prestashop"

echo IP $PRESTASHOP_IP

# Consulta SQL que se desea ejecutar
SQL_QUERY="UPDATE ps_configuration SET value = '${PRESTASHOP_IP}' WHERE name IN ('PS_SHOP_DOMAIN', 'PS_SHOP_DOMAIN_SSL');
UPDATE ps_shop_url SET domain = '${PRESTASHOP_IP}:80',domain_ssl = '${PRESTASHOP_IP}:443' WHERE id_shop = 1;"

# Ejecutar la consulta SQL utilizando la variable de entorno
mysql -u $DB_USER -p$DB_PASSWORD $DB_NAME  -h localhost -e "${SQL_QUERY}"

# Verificar si el comando mysql se ejecutó correctamente
if [ $? -eq 0 ]; then
  echo "Ip cambiada con exito."
else
  echo "Error al ejecutar la consulta."
  exit 1
fi


