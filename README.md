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

## Développer sous windows avec BotBase
```cmd
 cmd /c mklink /D ..\Bot_Base\bot\extends\site ..\..\..\Web_Site\bot\extends 
```
c'ette solution permet de copier coller est plus rapide qu'un git submodule.
Penser à ajouter les variables d'environnement