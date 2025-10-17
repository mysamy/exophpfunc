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
$article1 = appliquerReduction(100, 10);
$article2 = appliquerReduction(50, 20);  
$article3 = appliquerReduction(200, 15); 

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

$email = "@userexample.com";
$motdepasse = "SecurePass123";
$age = 25;

// 💡 MISSION 3 : Trois fonctions de vérification
echo strpos($email,"@");
function verifierEmail($email) {
    if (strpos($email, "@") !== false) {
        return "✅ oui";
    } else {
       return "❌ non";
    }
}

function verifierMotDePasse($motdepasse) {
    if (strlen($motdepasse) >= 8) {
            return "✅ oui";
    } else {
       return "❌ non";
    }
}

function verifierAge($age) {
     if ($age >= 18) {
            return "✅ oui";
    } else {
       return "❌ non";
    }
}

// 📝 Tests avec plusieurs cas

echo "<br><br>=== Tests Validation ===<br>";

echo "Email valide ? " . verifierEmail($email) . "<br>";
echo "Mot de passe valide ? " . verifierMotDePasse($motdepasse) . "<br>";
echo "Âge valide ? " . verifierAge($age) . "<br>";

// Autres cas de test
echo "<br>Autres cas :<br>";
echo "Email 'userexample.com' → " . verifierEmail("userexample.com")  . "<br>";
echo "Mot de passe 'abc' → " . verifierMotDePasse("abc")  . "<br>";
echo "Âge 16 → " . verifierAge(16) . "<br>";
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
<?php
// ============================================================================
// ! MINI-PROJET 1 - NIVEAU DÉBUTANT : Le convertisseur de température
// ============================================================================
// CONTEXTE : Vous créez une application météo internationale. Les températures
// sont parfois en Celsius, parfois en Fahrenheit. Il faut les convertir.

// 🔍 OBSERVATION : Regardez ce code répétitif
echo "=== CONVERSIONS MULTIPLES ===<br>";

// Conversion 1 : Paris
$tempParis = 20; // en Celsius
$tempParisFahrenheit = ($tempParis * 9 / 5) + 32;
echo "Paris : " . $tempParis . "°C = " . $tempParisFahrenheit . "°F<br>";

// Conversion 2 : Lyon
$tempLyon = 25; // en Celsius
$tempLyonFahrenheit = ($tempLyon * 9 / 5) + 32;
echo "Lyon : " . $tempLyon . "°C = " . $tempLyonFahrenheit . "°F<br>";

// Conversion 3 : Marseille
$tempMarseille = 30; // en Celsius
$tempMarseilleFahrenheit = ($tempMarseille * 9 / 5) + 32;
echo "Marseille : " . $tempMarseille . "°C = " . $tempMarseilleFahrenheit . "°F<br>";

// 💡 VOTRE MISSION 1 :
// Créez une fonction "celsiusVersFahrenheit" qui prend une température en Celsius
// et retourne la température en Fahrenheit.

// Formule : fahrenheit = (celsius × 9/5) + 32
//
// Indice : Pensez bien à RETOURNER le résultat avec "return"
// pour pouvoir le réutiliser ensuite

function celsiusVersFahrenheit($tempCelsius) {
    return  ($tempCelsius * 9/5) + 32 . "°F\n";
};
echo celsiusVersFahrenheit($tempParis) . "<br>";
function FahrenheitVersCelsius($tempFahrenheit) {
    return  ($tempFahrenheit - 32) * 5/9 . "°C<br>";
};
echo FahrenheitVersCelsius($tempParisFahrenheit) . "<br>";
// 📝 VOTRE CODE ICI :
// Créez la fonction celsiusVersFahrenheit() et testez-la avec au moins 4 villes


// ============================================================================
// ! MINI-PROJET 2 - NIVEAU INTERMÉDIAIRE : Le calculateur de frais de livraison
// ============================================================================
// CONTEXTE : Un site e-commerce doit calculer les frais de livraison en fonction
// du poids du colis. Plus c'est lourd, plus c'est cher !

// 🔍 OBSERVATION : Les règles de tarification :
// - Jusqu'à 1 kg : 5€
// - De 1 kg à 5 kg : 5€ + 2€ par kg supplémentaire
// - Plus de 5 kg : 13€ + 3€ par kg supplémentaire au-delà de 5 kg

// 💡 VOTRE MISSION 2 :
// Créez une fonction "calculerFraisLivraison" qui :
// - Prend un poids en paramètre (en kg)
// - Retourne le prix de livraison selon les règles ci-dessus
//
// Indice : Vous aurez besoin de structures conditionnelles (if/else)
// pour appliquer les différents tarifs
//
// Conseil : Testez avec plusieurs poids pour vérifier que tous les cas
// fonctionnent correctement :
// - 0.5 kg devrait coûter 5€
// - 3 kg devrait coûter 5 + (2 × 2) = 9€
// - 8 kg devrait coûter 13 + (3 × 3) = 22€


//  VOTRE CODE ICI :
// Créez la fonction calculerFraisLivraison() et testez-la avec différents poids
function calculerFraisLivraison(float $poids): float {
    if ($poids <= 0) {
        throw new InvalidArgumentException("😒 le poids doit être supérieur à 0");
    }
    return match (true) {
        $poids <= 1 => 5,
        $poids <= 5 => 5 + (2 * $poids),
        default => 13 + (3 * $poids),
    };
}
$poidsListe = [0.5,3,8,-2];
foreach ($poidsListe as $poids){
    try {
        $prix = calculerFraisLivraison($poids);
        echo "Poids : {$poids} kg → Prix : {$prix}€<br>";
    } catch (InvalidArgumentException $e) {
        echo "Poids : {$poids} kg → Erreur : " . $e->getMessage() . "<br>";
    }
};
// ============================================================================
// ! MINI-PROJET 3 - NIVEAU AVANCÉ : Le gestionnaire de points de fidélité
// ============================================================================
// CONTEXTE : Un magasin offre des points de fidélité selon le montant dépensé.
// Il faut vérifier si le client peut bénéficier d'une récompense.

//  OBSERVATION : Les règles du programme de fidélité :
// - 1 point par euro dépensé
// - Bonus de 10 points si achat >= 50€
// - Bonus de 50 points si achat >= 100€
// - Un client VIP obtient le double de points

//  VOTRE MISSION 3 :
// Créez DEUX fonctions :
//
// 1. calculerPoints($montant, $estVIP)
//    - Prend le montant de l'achat (en euros)
//    - Prend un booléen : true si le client est VIP, false sinon
//    - Calcule les points selon les règles ci-dessus
//    - Retourne le nombre total de points

function calculerPoints(float $montant, bool $estVIP): float {
    
    if ($montant <= 0) {
        throw new InvalidArgumentException("😒 le prix doit être supérieur à 0");
        
    };
    $points = match(true) {
            $montant < 50 => $montant,
            $montant >= 50 => ($montant + 10),
            default => ($montant + 50),

        };
    return $estVIP ? $points * 2 : $points;
    
}
function peutAvoirCadeau(float $points): bool {
    if ($points <= 0) {
        throw new InvalidArgumentException("😒 Les points doivent être positifs");
    }

    return $points > 200;
}

$exemples = [
    [40, false],
    [60, true],
    [150, false],
    [250, true],
    [-10, true],  // test erreur
];

foreach ($exemples as [$montant, $estVIP]) {
    try {
        $points = calculerPoints($montant, $estVIP);
        $peutCadeau = peutAvoirCadeau($montant, $estVIP);
        echo "Montant : {$montant}€ | VIP : " . ($estVIP ? "✅" : "❌") .
             " | Points : {$points} → " .
             ($peutCadeau ? "🎁 Oui<br>" : "😔 Non<br>");
    } catch (InvalidArgumentException $e) {
        
        echo "Erreur : " . $e->getMessage() . "<br>";
    }
    
}
// DÉFI 3 : Créez une fonction "afficherStatutClient" qui prend les points en paramètre
//          et affiche un message différent selon le niveau :
//          - Moins de 50 points : "Statut : Bronze"
//          - De 50 à 149 points : "Statut : Argent"
//          - De 150 à 299 points : "Statut : Or"
//          - 300 points ou plus : "Statut : Platine"
// */
function afficherStatutClient($points) {
    try {
    
    if ($points <= 0)  {
        
        throw new InvalidArgumentException("😒 Les points doit être supérieur à 0");
        
    }
    
        $statut = match (true) {
        $points < 50  => "🥉" ,
        $points <= 149 => "🥈" ,
        $points  <= 299 => "🥇",
        default => "👏💎",
        
    };
    echo "Statut :" . $statut . "<br>";
    } catch (InvalidArgumentException $e) {
    echo "Erreur : " . $e->getMessage() . '<img src="https://media4.giphy.com/media/v1.Y2lkPWUwZDJmNzlidDNqdXc2NjhmczNkcjRhdGk2Y2xxbTEzdXEzbTI3dnQxYzdscWhjNiZlcD12MV9naWZzX3NlYXJjaCZjdD1n/8vQSQ3cNXuDGo/200.gif" alt="Erreur" width="150">' . '<br>';
   }
} 
$listePoints = [0, 25, 120, 250, 400, -10];

foreach ($listePoints as $p) {
    afficherStatutClient($p);
}

// GIFLENS-https://media4.giphy.com/media/v1.Y2lkPWUwZDJmNzlidDNqdXc2NjhmczNkcjRhdGk2Y2xxbTEzdXEzbTI3dnQxYzdscWhjNiZlcD12MV9naWZzX3NlYXJjaCZjdD1n/8vQSQ3cNXuDGo/200.gif
// 2. peutAvoirCadeau($points)
//    - Prend le nombre de points en paramètre
//    - Retourne true si le client a au moins 200 points
//    - Retourne false sinon
//
//  ATTENTION : 
// - Pour le calcul des points VIP, doublez TOUT (points de base + bonus)
// - Les bonus ne s'additionnent pas : c'est soit 10 points, soit 50 points
//
// Indice pour tester :
// - 30€ client normal = 30 points
// - 50€ client normal = 50 + 10 = 60 points
// - 100€ client normal = 100 + 50 = 150 points
// - 100€ client VIP = (100 + 50) × 2 = 300 points
//
// 📝 VOTRE CODE ICI :
// Créez les deux fonctions et testez-les avec plusieurs cas différents
// N'oubliez pas de tester à la fois des clients normaux et VIP



// ============================================================================
// 🎯 BONUS - Pour aller plus loin (facultatif)
// ============================================================================
/*
Si vous avez terminé les 3 exercices, essayez ceci :

DÉFI 1 : Créez une fonction "fahrenheitVersCelsius" qui fait la conversion inverse
         Formule : celsius = (fahrenheit - 32) × 5/9

DÉFI 2 : Modifiez la fonction calculerFraisLivraison pour qu'elle retourne 0€
         si le poids est négatif ou égal à 0 (cas d'erreur)



// ============================================================================
// 📚 RAPPEL DES CONCEPTS CLÉS
// ============================================================================
/*
1. UNE FONCTION = UN OBJECTIF CLAIR
   Chaque fonction doit faire une seule chose précise

2. PARAMÈTRES = ENTRÉES
   Ce dont la fonction a besoin pour fonctionner

3. RETURN = SORTIE
   Ce que la fonction vous donne en retour

4. APPEL = UTILISATION
   Vous activez la fonction en écrivant son nom suivi de ()

5. RÉUTILISABILITÉ
   Une bonne fonction peut être utilisée dans différents contextes
*/
