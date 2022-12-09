# La gestion des mails (mailer)
##  Interception des mails dans le profiler (webdebug toolbar)

1) Modifier le fichier web_profiler.yaml
    intercept_redirects: true
2) Décommenter la variable mailerDSN dans le .env
3) Créer un controller et ajouter la méthode contact()
 ## Interception des mails dans un faker client (mailtrap.io)

1)Configurer la variable DSN comme suit: 
    user:password@smtp.mailtrap.io:2525
   Les données se trouvent sur le site (setup sandbox). Choisir la version pour Symfony 5+

2) Dans le terminal: 
   - composer require symfony/messenger
   - php bin/console messenger:consume async
## Utilisatio, d'un formulaire (données dynamiques)
### Création de l'entité Contact qui ne sera pas migrée en DB. Créer l'entité sans passer par le maker,
### Ajouter les propriétés pour le formulaire + getters & setters

### Création du formType 
    Utiliser le maker et ne rien mettre à la question suivante

### Création d'une méthode de Controller
    - Instancier la classe Contact pour pouvoir utiliser les 
    getters et récupérer les données du formulaire.
    - Method html() de la classe Email permet de formater le contenu
    avec du code HTML