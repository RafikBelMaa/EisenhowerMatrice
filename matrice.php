<?php

// ================= UTILITAIRE =================
function createMatrice(int $rows, int $columns): array
{
  $matrice = [];
  for ($i = 0; $i < $rows; $i++) {
    $matrice[$i] = [];
    for ($j = 0; $j < $columns; $j++) {
      $matrice[$i][$j] = [];
    }
  }
  return $matrice;
}


// ================= GESTION DES ERREURS =================
function showError()
{
  echo "error\n";
}
function isValidCount(array $arguments)
{
  if (count($arguments) !== 2) {

    return false;
  }

  return true;
};
function isNumber(array $arguments)
{
  foreach ($arguments as $argument) {
    if (!ctype_digit($argument) || $argument <= 0) {

      return false;
    }
    # code...
  }
  return true;
};
// ================= PARSING =================
function parseArguments(array $argv): array
{
  $arguments = array_slice($argv, 1);

  return $arguments;
};

// ================= RESOLUTION =================
/* $arguments = parseArguments($argv);

if (!isValidCount($arguments)) {
  showError();
  return;
}
if (!isNumber($arguments)) {
  showError();
  return;
} */

/* $matrice = createMatrice($arguments[0], $arguments[1]);
displayMatrice($matrice); */
// ================= AFFICHAGE =================
function displayMatrice(array $matrice)
{
  foreach ($matrice as $row) {
    foreach ($row as $column) {
      if (!array_key_exists("titre", $column)) {
        continue;
      }
      echo $column["titre"] . " ";
    }
    # code...
    echo  "\n";
  }
}
