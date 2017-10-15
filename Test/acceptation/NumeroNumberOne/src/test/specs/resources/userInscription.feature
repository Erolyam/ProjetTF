Feature: User Inscription
  Inscription d'un utilisateur dans l'application Numero Number One.
  L'utilisateur doit remplir un formulaire avec plusiers champs qui sont validés pour inscrire à l'utilisateur 
  à la plateforme où pour l'indiquer les erreur au moment du remplissage.

  Scenario: S'inscrire avec un champ du formulaire incorrect
    Given L'utilisateur accede a la page d'inscription
    When L'utilisateur remplit le formulaire incorrectement
    Then Une erreur signalant que l'utilisateur n'a pas ete inscrit est affichee