# Hackaton

Remarque: J'ai bougé tout le contenu du dossier react en dehors car le index.html doit être accessible directement lors du déploiement, je suis encore en train de chipoter pour voir comment l'héberger sur mon serveur :)
En attendant, il est déployé sur [https://green-hiro.vercel.app/](https://green-hiro.vercel.app/) avec quelques bugs graphiques liés au déploiement mais sinon 100% fonctionnel :)

## Lancer le projet
1. Cloner le projet sur votre machine et l'ouvrir dans vs code
2. Directement dans "Hackaton"

```
   npm i
//ou
  npm install

//suivi de
   npm run dev
```
3. Un fois cela fait, le projet va s'exécuter automatiquement dans votre navigateur

## Comment utiliser Git en groupe?
J'ai créé un repos utilisant git flow du coup merci d'utiliser ces commandes-ci:

```
git clone https://github.com/Dj3ni/Hackaton.git
```

Pour initialiser le git flow chez vous aussi
```
git flow init
```
Il faut changer la master en main et pour le reste

Quand vous clonez le repos, vous allez être directement sur la branche "Develop". Merci de ne rien créer/modifier dessus. 
Faites directement la commande suivante afin de créer votre branche de travail.

```
git flow feature start Votre nom ou surnom - Nom de la fonctionnalité que vous développez
```
ex: git flow feature start Jen-testRenJs

Cette commande va créer votre branche et vous switcher directement dessus, vous permettant de travailler directement sur la bonne feature.
Pour des facilités de gestion, merci de ne pas déveloper plusieurs fonctionnalités différentes sur la même branche mais de créer une nouvelle branche si vous faites une fonctionnalité dont la première n'a pas besoin pour fonctionner.

Pour les commits, les commandes ne changent pas:

```
git add .  (pour stager toutes vos modifs

// suivi de

git commit -m "ce que vous avez fait depuis la dernière sauvegarde"

```

Pensez à faire un commit avant de changer de fichier/dossier ex: si je fais les background, je commit avant de m'occuper du personnage. Cela permettra de limiter le risque de perte d'info et d'éviter de recommencer trop en cas d'erreur/ de problème

Pour le premier push, il faut aller dans VsCode cliquer sur publish branch d'abord.

Lorsque vous faites un git push, cela va créer une demande de pull request dans le github:
![image](https://github.com/user-attachments/assets/6075072a-4de6-4eb4-9811-56d4e525a8de)

Quand vous cliquez sur compare and pull request, dans le menu du haut, veuillez sélectionner la branche "develop" et non "main"!
![image](https://github.com/user-attachments/assets/aa85cf8a-41be-4acd-81e2-a2832a92ba26)

Mettez un petit message avec e que vous avez fait etc,  puis sur créer pull request (et rien d'autre!!) De cette manière que je dois checker s'il n'y a pas de problème de conflit dans certains fichiers.
![image](https://github.com/user-attachments/assets/e1f24a33-641c-481a-bc67-21b935124d40)


Si vous avez la moindre hésitaton, demandez-moi svp je viendrai vous aider avec plaisir. Je préfère venir vous aider 10 fois et que tout roule plutôt que de galérer le dernier jour pcq il y a plein de probs :)

## Commandes pour utiliser la plateforme API

Pour pouvoir utiliser la plateforme API, il faut faire ceci:
1. Lancer Xampp (apache et sql): permet d'avoir le serveur Symfony et PhpMyAdmin
2. une fois dans le dossier ProjetSymfony1:
   ![image](https://github.com/user-attachments/assets/0c95af77-f2dc-4e70-9878-37a83cbd489c)

   //1. Mettre à jour les paquets
   ```
    composer install
   ```
   //2. Lancer la migration de la DB
   ```
   .\migration.bat
   ```
   //3. Lancer le serveur local de symfony
   ```
   symfony serve:start
   ```
3. Une fois tout ça lancé, mettre l'adresse suivante dans  le navigateur

  ```
  localhost:8000/api
  ```
  
