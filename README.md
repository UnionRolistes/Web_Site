
# Site Web :

Contient 3 sections :

  

* I - Une présentation de l'Union des Rolistes

* II - Un paragraphe au sujet des prestations proposées

* III - Des liens vers nos différentes plateformes de dons

* IV - (Prochainement) Un lien vers notre boutique de goodies

  

Pour une utilisation des modules sur d'autres sites, vous trouverez des informations sur les dépendances commentées dans le code

  
  

# Installation

Pour une 1ère installation :

"cd /usr/local/src && sudo git clone https://github.com/UnionRolistes/Bot_Base && cd Bot_Base && sudo bash updateBot.sh"

  

sudo nano /etc/apache2/sites-available/300-UR_Site.conf --> Remplacer "serverName site.unionrolistes.fr" (ligne 9) par la redirection saisie sur votre hébergeur en ligne

  
  

Pour une mise à jour :

"cd /usr/local/src/Bot_Base && sudo git checkout . && sudo git pull && sudo bash updateBot.sh"

  

### Installation du site web avec `install_server.sh`

  

Pour une installation complète sur un serveur ou une machine virtuelle, utilisez le script `install_server.sh`. Ce script installe automatiquement PHP, Docker et Apache, puis configure le site web.

  

**Étapes :**

  

1.  **Cloner le dépôt :**

```
sudo git clone https://github.com/UnionRolistes/Web_Site.git
```

Changer de branch pour un test sur une branch spécifique :

```
git checkout nom-de-la-branch
```

2.  **Exécuter le script d'installation :**

```
sudo bash install_server.sh
```

Ce script effectue les actions suivantes :

- Installation de PHP, Docker et Apache

- Configuration d'Apache pour le site web

3.  **Déploiement du site dans le répertoire approprié (VM ou server):**

Copier le code du site web dans apache :

```
sudo cp -r Web_Site/src/www/* /var/www/html/Web_Site/
```

Et copier le conf du site dans apache :

```
A COMPLETER
```