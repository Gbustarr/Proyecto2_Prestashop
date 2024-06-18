#!/bin/bash

echo "Actualizando contenedor de Prestashop"
docker exec -it contenedor_prestashop /bin/bash -c "apt-get update -y"
docker exec -it contenedor_prestashop /bin/bash -c "apt-get upgrade -y"

echo "Actualizando contenedor de MySQL"
docker exec -it contenedor_db /bin/bash -c "apt-get upgrade -y"
docker exec -it contenedor_db /bin/bash -c "apt-get upgrade -y"

echo "Actualizaciones completadas"

