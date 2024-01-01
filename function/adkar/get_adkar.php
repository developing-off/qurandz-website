<?php
$json = file_get_contents("assets/json/adkar/adkar.json");
$data_hadith = json_decode($json, true);


$hour = date("G");

if ($hour >= 6 && $hour < 12) {
  $category_time = 'أذكار الصباح';
} else {
  $category_time = 'أذكار المساء';
}

$filtered_data = array_filter($data_hadith, function($item) use ($category_time) {
  return $item['category'] == $category_time;
});
$random_item = $filtered_data[array_rand($filtered_data)];


$categorie1 = array(); 
$categorie2 = array(); 
$non_categorise = array();

foreach ($data_hadith as $item) {
 
  if (isset($item['category'])) {
      switch ($item['category']) {
          case 'أذكار الصباح':
              $categorie_masaa[] = $item;
              break;
          case 'أذكار المساء':
              $categorie_sabah[] = $item;
              break;
          default:
              $non_categorise[] = $item;
              break;
      }
  } else {
      $non_categorise[] = $item;
  }
}

// Stocker les tableaux associatifs dans des variables distinctes
$azkar_sabah = $categorie_masaa;
$azkar_masaa = $categorie_sabah;
$other = $non_categorise;


?>