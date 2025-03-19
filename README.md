# Rendu Tests unitaires et de non regressions 

## Introduction

L’objectif de ce rapport est de valider les fonctionnalités de l’application à travers différents types de tests. L’application permet aux utilisateurs d’ajouter, modifier et supprimer des tâches.

Les outils utilisés pour les tests sont :
• PHPUnit pour les tests unitaires et fonctionnels
• Selenium pour les tests e2e

## Résultats des Tests

### Tests Fonctionnels (PHPUnit)
voir  [ici](https://github.com/marieesss/tests-unitaires-et-e2e/blob/main/tests/model/TaskManagerTest.php)  
  
![alt text](https://github.com/marieesss/tests-unitaires-et-e2e/blob/main/Capture%20d%E2%80%99%C3%A9cran%202025-03-19%20135242.png)

### Tests e2e

Les tests E2E ont été réalisés pour simuler des interactions utilisateur complètes.

voir [ici](https://github.com/marieesss/tests-unitaires-et-e2e/blob/main/e2e/ex1.js)

```
npm install
npm run test
```

![alt text](https://github.com/marieesss/tests-unitaires-et-e2e/blob/main/Capture%20d%E2%80%99%C3%A9cran%202025-03-19%20135708.png)



### Tests de Non-Régression
voir [ici](https://github.com/marieesss/tests-unitaires-et-e2e/blob/main/e2e/ex2.js)

![alt text](https://github.com/marieesss/tests-unitaires-et-e2e/blob/main/Capture%20d%E2%80%99%C3%A9cran%202025-03-19%20140030.png)


### Tests de Performance avec JMeter/k6

## Problèmes détectés et solutions proposées

Problème 1 : Le fichier HTML n'était pas sur un serveur pour les tests e2e ou de non régression  
Solution 1 : Utilisation de l'extension LiveServer ou sur node  

```
npx serve .
```

## Conclusion

-----------------------------------------------
Réalisé par Marie Espinosa 
le 19/03/2025


