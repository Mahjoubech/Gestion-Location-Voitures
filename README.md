# 🚗 Système de Gestion de Location de Voitures

### Modernisation de la gestion des locations de voitures grâce à une application web intuitive et dynamique.

---

## 🌟 Aperçu du Projet

Ce projet vise à créer une **application web responsive** pour gérer les **clients**, **voitures** et **contrats de location** pour une société de location de voitures. L'application comprend :
- **Conception de base de données** : Une base relationnelle pour stocker et lier toutes les informations nécessaires.
- **Développement Backend** : Utilisation de PHP pour effectuer des opérations CRUD.
- **Interface utilisateur ergonomique** : Conçue avec Tailwind CSS, elle est élégante et facile à utiliser.

---

## 🛠️ Fonctionnalités

### Fonctionnalités principales :
1. **Gestion des Clients** :
   - Ajouter, modifier, supprimer et consulter les détails des clients.
2. **Gestion des Voitures** :
   - Gérer les voitures disponibles et leurs informations.
3. **Contrats de Location** :
   - Créer et gérer des contrats liés dynamiquement aux clients et voitures.
4. **Intégration de base de données** :
   - Requêtes SQL avancées pour gérer les relations et l'intégrité des données.

### Interface Responsive :
- Optimisée pour **ordinateurs, tablettes et mobiles** grâce à Tailwind CSS.
- **Tableaux dynamiques** pour une meilleure visualisation des données.

---

## 🔗 Relations

Les relations suivantes sont gérées dans la base de données :
- **Client ↔ Contrat** : Un client peut avoir plusieurs contrats.
- **Voiture ↔ Contrat** : Une voiture peut être liée à plusieurs contrats de location.

![Diagramme E-A](./assets/er-diagram.png) <!-- Ajoutez l'image de votre diagramme ici -->

---

## 🚀 Technologies Utilisées

- **Backend** : PHP
- **Base de Données** : MySQL
- **Frontend** : HTML, CSS, TailwindCSS
- **Outils** : Visual Studio Code, phpMyAdmin

---

## 📂 Structure des Dossiers

```plaintext
📂 GESTION DE VOITURE/
├── 📁 image
│   ├──image 1
│   |──image 2 
|   └── image 3
├── 📁 views
│   ├── 📄 ajoutCar.php|
│   ├── 📄 ajoutclient.php|
│   ├── 📄 databasecnx.php|
│   └── 📄 modify.php|
│   ├── 📄 modifycar.php|
│   └── 📄 modifycontrat.php|
├── 📄 cars.php|
├── 📄 clients.php|
├── 📄 contrats.php|
├── 📄 main.js|
├── 📄 statistic.php|
├── 📄 style.css|
├── 📄 tailwind.config.js|
├── 📄 tailwind.js|
└── 📄 README.md|

