#!/bin/bash
echo "Entrando a contenedor y cambiando ip de prestashop"
docker exec -it contenedor_db /bin/bash /ip_setup.sh
docker exec -it contenedor_prestashop /bin/bash -c "chown -R www-data:www-data /var/www/html"
docker exec -it contenedor_prestashop /bin/bash -c "chmod -R 755 /var/www/html"
echo "Script ejecutado"
