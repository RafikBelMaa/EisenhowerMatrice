<?php
require_once __DIR__ . '/matrice.php';
// ================= UTILITAIRE =================
function initialiseEisenhower(): array
{
  $matrice = createMatrice(3, 3);
  $matrice[1][0]["titre"] = "Important";
  $matrice[2][0]["titre"] = "Pas important";
  $matrice[0][1]["titre"] = "Urgent";

  $matrice[0][2]["titre"] = "Pas urgent";


  $matrice[1][1]["titre"] = "A faire";
  $matrice[1][1]["taches"] = ["Faire les coures"];


  $matrice[1][2]["titre"] = "A planifier";
  $matrice[2][1]["titre"] = "Déléguer";
  $matrice[2][2]["titre"] = "Eliminer";



  return $matrice;
};

// ================= GESTION DES ERREURS =================


// ================= PARSING =================


// ================= RESOLUTION =================
$matriceEisenhower = initialiseEisenhower();
displayMatrice($matriceEisenhower);
// ================= AFFICHAGE =================
