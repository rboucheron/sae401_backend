# Guide d'Installation

## Installation de PHP
 php -S localhost:4000



 
Avant de commencer, assurez-vous que PHP est installé sur votre ordinateur en exécutant la commande suivante :

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

## Configurer la db 

Pour configurer la base de données, suivez les étapes suivantes :

Créez le fichier `.env.local` à la racine du projet.

Démarrez votre serveur MySQL via XAMPP.

Pour déterminer sur quel port MySQL tourne, exécutez la commande suivante dans le terminal PHPMyAdmin :
```mysql 
SHOW VARIABLES WHERE Variable_name = 'port';
 ```  
![alt text](https://kinsta.com/wp-content/uploads/2020/07/find-mysql-port-2-1024x676.png)
Maintenant, dans le fichier .env.local que vous avez créé précédemment, remplacez 8889 par le numéro de port MySQL dans la ligne 3. En général, sur XAMPP, aucun mot de passe n'est nécessaire.
```php
APP_ENV=dev
APP_SECRET=01ecb95dc86fbe1748d3783f35893f80
DATABASE_URL=mysql://root:@127.0.0.1:8889/sushi?charset=utf8mb4

```
Exécutez la commande suivante pour créer la base de données :

```bash
php bin/console doctrine:database:create
```
Créez les tables en exécutant la commande suivante :

```bash
php bin/console doctrine:schema:update --force
``` 
Pour remplir la base de données, utilisez la commande suivante :
```bash
php bin/console doctrine:fixtures:load
```

## Démarrer le Serveur
Pour lancer le serveur, utilisez la commande suivante : 
```bash
php bin/console server:run
```
Ensuite, ouvrez votre navigateur web et accédez à l'URL suivante pour vérifier que le projet fonctionne correctement :
[http://127.0.0.1:8000 ](http://127.0.0.1:8000)http://127.0.0.1:8000

Une fois ces étapes terminées, vous avez installé avec succès le backend de la SAE 401. Vous pouvez accéder aux données via l'URL suivante : 
http://127.0.0.1:8000/api/box/99
