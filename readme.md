# Drapeaux
Ce site constitue un double exercice, on y trouve une liste de drapeaux issu de la base de données (sur la home page) ainsi qu'une liste de drapeaux largement plus fournie issu d'une API.
L'onglet "continent" renvoie les drapeaux issus de la base de données.
L'onglet "liste complète" renvoie vers les drapeaux de l'API, un tri par continent peut être effectué à cette page.
La barre de recherche concerne les drapeaux issus de l'API.

L'API utilisé est en anglais, de même que le nom des drapeaux provenant de cette API.

J'ai construit ce site comme exercice personnel pendant mon apprentissage des API et requêtes AJAX.

## Objectifs
S'exercer au modèle MVC pour afficher les données issues de la DB
Pratiquer le HTML et CSS pour fournir une expérience utilisateur agréable. Le site est responsive.  

S'exercer sur une API REST (API REST Country) à travers le JS et les requêtes AJAX.  


## Techno utilisées
HTML, CSS, JS, PHP, mySQL, Adminer,  
Outils : 
modèle MVC, composer (notamment pour AltoRouter et le dispatcher), quelques éléments de sécurité (requêtes préparées, filtres), AJAX.

## Améliorations possibles et difficultés rencontrées  

Factoriser encore tout en gardant le code lisible facilement.

Ajouter d'autres éléments sur la sécurité (pas suffisant à ce jour)
Ajouter du JS pour améliorer l'expérience utilisateur.

Optimiser le temps d'affichage.

Travailler sur la barre search qui n'est pas performante à ce jour. Il faut retourner sur une autre page pour pouvoir faire une nouvelle recherche

Créer des comptes utilisateurs, afficher le meilleur score entre les utilisateurs, organiser des battles, ajouter d'autres quiz, d'autres jeux