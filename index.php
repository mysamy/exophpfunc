<?php
// ============================================================================
// ! MINI-PROJET 1 - NIVEAU DÉBUTANT : Le calculateur simple
// ============================================================================
// CONTEXTE : Vous avez remarqué que vous répétez souvent le même calcul
// dans votre code. Comment éviter cette répétition ?

// 🔍 OBSERVATION : Regardez le code ci-dessous et identifiez ce qui se répète
echo "=== AVANT (sans fonction) ===\n";
$nombre1 = 5;
$nombre2 = 3;
// On calcule la somme
$resultat1 = $nombre1 + $nombre2;
echo "5 + 3 = " . $resultat1 . "\n";

// On refait le même calcul ailleurs
$nombre3 = 12;
$nombre4 = 8;
$resultat2 = $nombre3 + $nombre4;
echo "12 + 8 = " . $resultat2 . "\n";

// 💡 VOTRE MISSION 1 :
// Créez une fonction appelée "additionner" qui prend deux nombres en paramètre
// et retourne leur somme.
// 
// ? Indice : La syntaxe de base est :
// function nomDeLaFonction($parametre1, $parametre2) {
//     todo: Votre code ici

//     return $resultat;
// }
function additionner($nombre1, $nombre2) {
    $resultat = $nombre1 + $nombre2 ;
    return $resultat;
};

// 📝 VOTRE CODE ICI :
// À vous de créer la fonction additionner() et de l'utiliser deux fois
echo additionner($nombre1, $nombre2); 
echo "<br>";
echo additionner($nombre3, $nombre4);
// ============================================================================
// ! MINI-PROJET 2 - NIVEAU INTERMÉDIAIRE : L'assistante de magasin
// ============================================================================
// CONTEXTE : Un magasin vous demande de créer un système pour 
// calculer les prix des articles avec réduction.

// 🔍 OBSERVATION : Imaginez une fonction qui ferait plusieurs choses :
// 1. Recevoir un prix
// 2. Recevoir un pourcentage de réduction
// 3. Calculer le prix réduit
// 4. Retourner le résultat

// 💡 VOTRE MISSION 2 :
// Créez une fonction "appliquerReduction" qui :
// - Prend un prix (paramètre 1)
// - Prend un pourcentage de réduction (paramètre 2)
// - Calcule et retourne le prix final
//
// ? Indice : Pour calculer une réduction :
// montantReduit = prix - (prix * pourcentage / 100)
//
// Conseil : Pensez à bien nommer votre fonction et ses paramètres
// pour que ce soit clair pour quelqu'un d'autre qui lirait votre code

function appliquerReduction($prix, $pourcentage) {
    $prixFinal = $prix - ($prix * $pourcentage / 100);
    return $prixFinal;
}

// 📝 Tests avec au moins 3 articles différents
$article1 = appliquerReduction(100, 10); // 90
$article2 = appliquerReduction(50, 20);  // 40
$article3 = appliquerReduction(200, 15); // 170

echo "Article 1 : $article1 €<br>";
echo "Article 2 : $article2 €<br>";
echo "Article 3 : $article3 €<br>";

// 📝 VOTRE CODE ICI :
// À vous de créer la fonction appliquerReduction() et de tester avec 
// au moins 3 articles différents

// ============================================================================
// ! MINI-PROJET 3 - NIVEAU AVANCÉ : Le validateur d'inscription
// ============================================================================
// CONTEXTE : Un site web a besoin de vérifier les informations avant
// d'accepter une inscription. Chaque vérification répète du code similaire.

// 🔍 OBSERVATION : Voici ce qu'on doit vérifier (imaginez que c'est répétitif) :
$email = "user@example.com";
$motdepasse = "SecurePass123";
$age = 25;

// 💡 VOTRE MISSION 3 :
// Créez TROIS fonctions différentes :
//
// 1. verifierEmail($email)
//    - Doit retourner true si l'email contient un "@"
//    - Doit retourner false sinon
//    ? Indice : Utilisez la fonction strpos($chaîne, "@") 
//    qui retourne false si "@" n'est pas trouvé
//
// 2. verifierMotDePasse($motdepasse)
//    - Doit retourner true si le mot de passe fait au moins 8 caractères
//    - Doit retourner false sinon
//    ? Indice : Utilisez strlen($chaîne) pour obtenir la longueur
//
// 3. verifierAge($age)
//    - Doit retourner true si l'âge est >= 18
//    - Doit retourner false sinon
//
// ⚠️ ATTENTION : Ces fonctions retournent true/false (booléen), pas un texte !

$email = "user@example.com";
$motdepasse = "SecurePass123";
$age = 25;

// 💡 MISSION 3 : Trois fonctions de vérification

function verifierEmail($email) {
    return strpos($email, "@") !== false;
}

function verifierMotDePasse($motdepasse) {
    return strlen($motdepasse) >= 8;
}

function verifierAge($age) {
    return $age >= 18;
}

// 📝 Tests avec plusieurs cas

echo "<br><br>=== Tests Validation ===<br>";

echo "Email valide ? " . (verifierEmail($email) ? "✅ Oui" : "❌ Non") . "<br>";
echo "Mot de passe valide ? " . (verifierMotDePasse($motdepasse) ? "✅ Oui" : "❌ Non") . "<br>";
echo "Âge valide ? " . (verifierAge($age) ? "✅ Oui" : "❌ Non") . "<br>";

// Autres cas de test
echo "<br>Autres cas :<br>";
echo "Email 'userexample.com' → " . (verifierEmail("userexample.com") ? "✅" : "❌") . "<br>";
echo "Mot de passe 'abc' → " . (verifierMotDePasse("abc") ? "✅" : "❌") . "<br>";
echo "Âge 16 → " . (verifierAge(16) ? "✅" : "❌") . "<br>";
?>
// 📝 VOTRE CODE ICI :
// À vous de créer les trois fonctions et de les tester 
// avec plusieurs données (dont des cas invalides)


// ============================================================================
// 🎯 POINTS CLÉS À RETENIR
// ============================================================================
/*
Une fonction PHP c'est :
1. Une réutilisabilité : écrivez le code une fois, utilisez-le plusieurs fois
2. De la clarté : une fonction bien nommée explique ce qu'elle fait
3. De l'ordre : mettez le code ensemble pour que ce soit facile à modifier

Anatomie d'une fonction :
function nomDeFonction($param1, $param2) {  ← Les paramètres (entrées)
    todo: Le code à exécuter
    return $resultat;                       ← La valeur retournée (sortie)
}

Comment l'utiliser :
$valeur = nomDeFonction($arg1, $arg2);     ← On l'appelle avec des arguments
*/
