# Guide d'Installation

## Installation de PHP

Avant de commencer, assurez-vous que PHP est installé sur votre système en exécutant la commande suivante :

```bash
php -v

```
Si PHP n'est pas installé, veuillez consulter la documentation officielle pour obtenir des instructions sur le téléchargement et l'installation : [Téléchargement PHP](https://www.php.net/downloads)
## Installation de Composer
Pour installer Composer, exécutez les commandes suivantes dans votre terminal :
```bash
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'edb40769019ccf227279e3bdd1f5b2e9950eb000c3233ee85148944e555d97be3ea4f40c3c2fe73b22f875385f6a5155') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

## Récupération du Projet
Pour récupérer le projet, utilisez la commande suivante pour cloner le dépôt GitHub :
```bash
git clone https://github.com/rboucheron/sae401BackEnd/
```
Ensuite, accédez au répertoire cloné en exécutant :
```bash
cd sae401BackEnd
```
Enfin, installez les dépendances du projet avec Composer en exécutant la commande suivante :
```bash
composer install
```
## Démarrer le Serveur
Pour lancer le serveur, utilisez la commande suivante : 
```bash
php bin/console server:run
```
Ensuite, ouvrez votre navigateur web et accédez à l'URL suivante pour vérifier que le projet fonctionne correctement :
[http://127.0.0.1:8000 ](http://127.0.0.1:8000)http://127.0.0.1:8000
