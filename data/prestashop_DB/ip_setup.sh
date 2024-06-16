#!/bin/bash

# Verificar si la variable de entorno PRESTASHOP_IP está establecida
if [ -z "$PRESTASHOP_IP" ]; then
  echo "La variable de entorno PRESTASHOP_IP no está establecida."
  exit 1
fi

echo "Esperando a que servicio mysql esté activo"

while ! socat -z "localhost" "3306"; do
  sleep 1
done

echo "Mysql activo, Estableciendo variables de entorno"

# Configuración de conexión a la base de datos
DB_USER="root"
DB_PASSWORD=$MYSQL_ROOT_PASSWORD
DB_NAME="prestashop"

echo user $DB_USER, pass $DB_PASSWORD, DB $DB_NAME , IP $PRESTASHOP_IP

# Consulta SQL que se desea ejecutar
SQL_QUERY="UPDATE ps_configuration SET value = '${PRESTASHOP_IP}' WHERE name IN ('PS_SHOP_DOMAIN', 'PS_SHOP_DOMAIN_SSL');"

# Ejecutar la consulta SQL utilizando la variable de entorno
mysql -u $DB_USER -p$DB_PASSWORD $DB_NAME  -h localhost -e "${SQL_QUERY}"

# Verificar si el comando mysql se ejecutó correctamente
if [ $? -eq 0 ]; then
  echo "Consulta ejecutada con éxito."
else
  echo "Error al ejecutar la consulta."
  exit 1
fi


