#!/bin/bash

echo "Por respaldar base de datos..."
docker exec -it contenedor_db /bin/bash -c "/var/lib/mysql/respaldar_db.sh"
echo "Base de datos respaldada"
