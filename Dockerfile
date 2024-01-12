FROM php:apache

WORKDIR /var/www/html

# Copiar solo los archivos necesarios
COPY . /var/www/html/

# Cambiar permisos para el directorio de la aplicación
RUN a2enmod rewrite 

# Exponer puerto 80
EXPOSE 80