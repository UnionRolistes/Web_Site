#!/bin/bash

# ===========================
# Variables
# ===========================
PROJECT_NAME="Web_Site"
PROJECT_DIR="/var/www/$PROJECT_NAME"
HOST_PORT=80
PHP_VERSION="php7.4"  # Change si tu veux une autre version de PHP
DOCKER_COMPOSE_VERSION="1.29.2"  # Version de Docker Compose à installer

# ===========================
# Vérification et installation d'Apache
# ===========================
echo "Vérification de l'installation d'Apache..."
if ! command -v apache2 &> /dev/null
then
    echo "Apache n'est pas installé. Installation en cours..."
    sudo apt update
    sudo apt install -y apache2
    sudo systemctl enable apache2
    sudo systemctl start apache2
else
    echo "Apache est déjà installé."
fi

# ===========================
# Vérification et installation de PHP
# ===========================
echo "Vérification de l'installation de PHP..."
if ! command -v php &> /dev/null
then
    echo "PHP n'est pas installé. Installation en cours..."
    sudo apt update
    sudo apt install -y $PHP_VERSION libapache2-mod-php
    sudo systemctl restart apache2
else
    echo "PHP est déjà installé."
fi

# ===========================
# Vérification et installation de Docker
# ===========================
echo "Vérification de l'installation de Docker..."
if ! command -v docker &> /dev/null
then
    echo "Docker n'est pas installé. Installation en cours..."
    sudo apt update && sudo apt install -y \
    apt-transport-https \
    ca-certificates \
    curl \
    gnupg \
    lsb-release

    curl -fsSL https://download.docker.com/linux/debian/gpg | sudo gpg --dearmor -o /usr/share/keyrings/docker.gpg

    echo "deb [arch=amd64 signed-by=/usr/share/keyrings/docker.gpg] https://download.docker.com/linux/debian $(lsb_release -cs) stable" \
    | sudo tee /etc/apt/sources.list.d/docker.list > /dev/null

    sudo apt update
    sudo apt install -y docker-ce docker-ce-cli containerd.io

    # Activer Docker au démarrage
    sudo systemctl enable docker
    sudo systemctl start docker
else
    echo "Docker est déjà installé."
fi

# ===========================
# Installation de Docker Compose (si besoin)
# ===========================
echo "Vérification de l'installation de Docker Compose..."
if ! command -v docker-compose &> /dev/null
then
    echo "Docker Compose n'est pas installé. Installation en cours..."
    sudo curl -L "https://github.com/docker/compose/releases/download/$DOCKER_COMPOSE_VERSION/docker-compose-$(uname -s)-$(uname -m)" \
    -o /usr/local/bin/docker-compose
    sudo chmod +x /usr/local/bin/docker-compose
else
    echo "Docker Compose est déjà installé."
fi

# ===========================
# Création du répertoire du projet
# ===========================
echo "Création du répertoire pour le projet..."
mkdir -p "$PROJECT_DIR"
cd "$PROJECT_DIR"

# Exemple de code PHP (si le dossier est vide)
if [ ! -f index.php ]; then
  echo "<?php echo 'Hello depuis Docker et Apache !'; ?>" > index.php
fi

# ===========================
# Création du fichier docker-compose.yml
# ===========================
cat <<EOF > docker-compose.yml
version: '3.8'

services:
  web:
    image: php:8.2-apache
    ports:
      - "$HOST_PORT:80"
    volumes:
      - .:/var/www/html
    restart: always
EOF

# ===========================
# Lancer le conteneur Docker
# ===========================
echo "Lancement du conteneur Docker pour Apache et PHP..."
sudo docker-compose up -d

echo "✅ Le site est maintenant accessible sur : http://$(curl -s ifconfig.me):$HOST_PORT"
