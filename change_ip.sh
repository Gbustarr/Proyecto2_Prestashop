#!/bin/bash
echo "Entrando a contenedor y cambiando ip de prestashop"
docker exec -it contenedor_db /bin/bash /ip_setup.sh
echo "Script ejecutado"