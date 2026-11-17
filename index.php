<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Matrice Eisenhower</title>
</head>

<body>
  <h1> Ma matrice d'eisenhower</h1>

  <section>
    <h2>Urgent et important</h2>
    <ul>
      <?php 
      function createList (array $taches) {
        foreach ($taches as $tache) {
          ?> <li> $tache</li>
          
        }
      }
    </ul>
  </section>
</body>

</html>