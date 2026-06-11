# Site Web

Site vitrine one-page de l'Union des Rôlistes : un seul fichier `src/www/index.php` autonome (CSS et JS inline, aucune dépendance externe). Assets dans `src/www/img/` et `src/www/fonts/`.

Sections : présentation de l'association, valeurs, prestations, soutien (liens de dons), partenaires, boutique (à venir), communauté Discord.

Pour ajouter un lien de don : voir `TUTO_AddingDonationLinks.txt`.

# Développement local

```
cd src/www && php -S localhost:8080
```

puis ouvrir http://localhost:8080. Alternative avec Docker (plus proche de la prod) :

```
docker run --rm -p 8090:80 -v "$PWD/src/www":/var/www/html php:7.3-apache
```

# Installation (prod)

Pour une 1ère installation :

```
cd /usr/local/src && sudo git clone https://github.com/UnionRolistes/Bot_Base && cd Bot_Base && sudo bash updateBot.sh
```

Puis adapter le vhost : `sudo nano /etc/apache2/sites-available/300-UR_Site.conf` → remplacer `ServerName site.unionrolistes.fr` (ligne 9) par le domaine saisi chez votre hébergeur.

Pour une mise à jour :

```
cd /usr/local/src/Bot_Base && sudo git checkout . && sudo git pull && sudo bash updateBot.sh
```
