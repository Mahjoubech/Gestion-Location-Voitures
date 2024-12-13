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
![image](https://github.com/user-attachments/assets/e6bd1632-9f3d-4a35-bc64-67916ec32c49)
![image](https://github.com/user-attachments/assets/8f7ab881-1e8e-49ae-b1be-d637db53f1c2)
![image](https://github.com/user-attachments/assets/482865a0-26ec-4458-933a-c369d23052d4)



---

## 🔗 Relations

Les relations suivantes sont gérées dans la base de données :
- **Client ↔ Contrat** : Un client peut avoir plusieurs contrats.
- **Voiture ↔ Contrat** : Une voiture peut être liée à plusieurs contrats de location.

[image](https://github.com/user-attachments/assets/24ec17d4-060e-4f90-ae8e-59cfff3283a9)


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
-------------------


📝 Guide d’Installation
Cloner le dépôt :

git clone [https://github.com/your-repo/car-rental-system.git](https://github.com/Mahjoubech/Gestion-Location-Voitures.git)
cd GESTION-DE-VOITURE
Configurer la base de données :

Importez les fichiers create-tables.sql et seed-data.sql dans votre serveur MySQL.
Configurer le backend :

Mettez à jour la connexion à la base de données dans database.php avec vos identifiants.
Lancer l’application :

Démarrez l'application sur votre serveur local avec des outils comme XAMPP ou WAMP.
🎯 Objectifs du Projet
Base de données relationnelle :

Maintenir l'intégrité des données et garantir des requêtes efficaces.
Backend dynamique :

Utilisation de PHP pour connecter et gérer les opérations CRUD.
Interface responsive :

Créer une interface moderne et intuitive pour tous les utilisateurs.
📊 Critères d’Évaluation
Structure de la base de données :

Normalisation et intégrité relationnelle.
Logique backend :

Opérations CRUD fonctionnelles et gestion des erreurs.
Design de l’interface :

Ergonomie, responsivité et esthétisme.
Documentation :

Explications claires et concises.


