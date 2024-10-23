# Hackaton

## Comment utiliser Git en groupe?
J'ai créé un repos utilisant git flow du coup merci d'utiliser ces commandes-ci:

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

Lorsque vous faites un git push, cela va créer une demande de pull request dans le github:

