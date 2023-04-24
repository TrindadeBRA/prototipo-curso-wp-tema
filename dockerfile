FROM wordpress:latest

# Instalação do PHPMyAdmin
RUN apt-get update && \
    apt-get install -y wget unzip && \
    wget https://files.phpmyadmin.net/phpMyAdmin/5.1.0/phpMyAdmin-5.1.0-all-languages.zip && \
    unzip phpMyAdmin-5.1.0-all-languages.zip && \
    mv phpMyAdmin-5.1.0-all-languages /usr/share/phpmyadmin && \
    rm phpMyAdmin-5.1.0-all-languages.zip && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Copia o arquivo de configuração do PHPMyAdmin
COPY config.inc.php /usr/share/phpmyadmin/

# Configuração do Apache para permitir o acesso ao PHPMyAdmin
RUN echo "Include /etc/phpmyadmin/apache.conf" >> /etc/apache2/apache2.conf

# Exponha as portas do WordPress e do PHPMyAdmin
EXPOSE 8000 8080
