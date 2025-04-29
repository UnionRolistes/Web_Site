#!/bin/bash

# ===========================
# Variables
# ===========================
PHP_VERSION="php7.4"  # Change si tu veux une autre version de PHP

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