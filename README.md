# StageRadar

**SAÉ S2.01 - Suivi du cycle de vie des conventions de stage - middleware Esup-Stage → Moodle**

* **Client :** M. Bringuier, référent stage
* **Sujet :** StageRadar
* **IUT BUT Réseaux et Télécommunications, Université Sorbonne Paris Nord**
* **Compétence 1 :** Réaliser - Développement d'application - Stage Radar

## Format pédagogique
Projet, en groupes de X étudiants.

## Contexte
Le client de cette SAÉ est M. Bringuier, référent stage pour l'IUT BUT Réseaux et Télécommunications, également coordinateur des stages BUT2/BUT3. Il a besoin de suivre l'avancement du stage de chaque étudiant de sa promotion. 

Aujourd'hui, ce suivi se fait entièrement à la main : à partir de sa liste d'étudiants (extraite de ScoDoc), il construit un tableau Excel dans lequel il coche, pour chaque étudiant, l'état d'avancement de son stage au fil de l'eau. Cette information provient de deux plateformes qui ne communiquent pas entre elles :
* **Moodle**, où l'étudiant dépose son CV et son bordereau de stage ;
* **Esup-Stage**, la plateforme institutionnelle de gestion des conventions de stage, où la convention est créée puis suit plusieurs étapes de validation : vérification administrative, validation pédagogique, validation de la convention, puis signatures des différentes parties.

## Problématique professionnelle
Le client (M. Bringuier) exprime le besoin de remplacer son tableau Excel coché à la main par une application avec interface graphique web qui centralise automatiquement, pour chaque étudiant de sa promotion, l'état du dépôt Moodle et l'état d'avancement de sa convention sur Esup, et qui restitue ainsi une vue unique et à jour du cycle de vie de chaque stage y compris la détection des étudiants qui n'ont encore aucun stage. L'objectif de la SAÉ est de formaliser ce besoin, d'en proposer une conception, puis de l'implémenter et de le tester.

## Contraintes d'accès aux données
Le sujet impose de composer avec des contraintes d'accès réalistes, proches de celles d'une vraie intégration professionnelle :
* **Côté Esup :** la seule API publique documentée d'Esup-Stage (/public/api) est réservée aux intégrations de signature électronique et protégée par des jetons attribués par l'administrateur de la plateforme. Elle n'est pas accessible à un étudiant. Un émulateur du site (l'application « gestion-stages »), reproduisant fidèlement son interface et ses données, est mis à disposition des groupes ; comme le site réel, il n'expose aucune API JSON. Les données doivent donc être obtenues en interrogeant les mêmes pages que celles utilisées par un navigateur (connexion, tableau de bord filtrable et paginé, fiche de convention).
* **Côté Moodle :** chaque groupe est inscrit sur le cours « bac à sable » avec un rôle Enseignant référent, en mode groupes séparés : il ne voit que les dépôts de ses propres membres. L'enseignant référent n'ayant lui-même aucun accès à l'API de services web de Moodle, aucun jeton ne peut être distribué aux groupes : comme côté Esup, les données de dépôt doivent être récupérées en interrogeant directement les pages Moodle avec le compte enseignant du groupe (connexion, page de l'activité de dépôt du CV/bordereau), et non via une API formelle.
* **Liste de référence :** un extrait anonymisé de la base ScoDoc de la promotion (nom/prénom fictifs, groupe réel) est fourni à chaque groupe, afin de pouvoir vérifier que chaque étudiant de la promotion est bien pris en compte, y compris ceux qui n'ont encore aucun dépôt ni convention.

## Fonctionnalités attendues
* récupération de la liste des étudiants du groupe (liste de référence, extraite de ScoDoc) ;
* récupération de la liste des dépôts (CV + bordereau) du groupe sur Moodle ;
* récupération de l'état d'avancement de la convention correspondante sur l'émulateur Esup, avec ses dates de début et de fin de stage ;
* rapprochement des deux sources, étudiant par étudiant ;
* calcul, à partir des dates de début et de fin, du nombre de semaines de stage ;
* suivi cumulé de ce nombre de semaines sur l'ensemble de la durée de vie de l'étudiant dans le cursus (plusieurs stages, plusieurs années) ;
* prise en compte du redoublement : les semaines de stage effectuées doivent pouvoir se répartir sur les 3 périodes de stage prévues par le cursus, y compris pour un étudiant qui redouble ;
* détection, par recoupement avec la liste de référence, des étudiants n'ayant encore ni dépôt Moodle ni convention (aucun stage en cours) ;
* interface graphique web restituant, pour l'enseignant référent, le cycle de vie consolidé de chaque stage reprenant la logique de la grille de suivi ;
* gestion propre des cas limites : dépôt Moodle sans convention encore créée, convention sans dépôt Moodle correspondant, données manquantes ou incohérentes.

## Statistiques (fonctionnalité bonus)
En plus du suivi individuel, l'application propose des indicateurs agrégés à destination de l'enseignant référent :
* **taux de couverture :** part des étudiants avec/sans stage, et répartition du nombre de conventions à chaque étape (vérification administrative, validation pédagogique, validation de la convention, signatures) ;
* **délais entre étapes :** délai moyen et délai maximum entre le dépôt Moodle et la création de la convention, puis entre chaque étape de validation jusqu'à la signature, pour repérer les dossiers qui bloquent ;
* **suivi des semaines de stage :** distribution du nombre de semaines par étudiant, cumul sur l'ensemble du cursus, et alerte si un étudiant approche ou dépasse le quota autorisé réparti sur les 3 périodes de stage.
