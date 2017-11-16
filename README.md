# ecomm2017

## Prérequis :
```
php
composer
symfony
mysql
```
## Copiez le repository sur votre machine :
```
git clone https://github.com/rollandguillaume/ecomm2017.git
```
## Mettez vous à la racine du site :
```
cd ecomm2017/ecomm_mcga/
```
## Lancez composer et renseignez les champs demandés
```
../composer.phar update 
```
## Initialisez la base de données :
```
php bin/console doctrine:database:create
php bin/console doctrine:schema:update --force
```
## Remplir la bdd
```
php bin/console doctrine:fixtures:load
```
