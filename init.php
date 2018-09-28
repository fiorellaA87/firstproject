<?php

$title = "The Plant Based Life";
$titleabout = "About";
$titleref = "References";
// associative array mapping page 'id' to page title
$pages = array(
  "index"=>"Home",
  "fitness"=>"Fitness",
  "recipes"=>"Recipes",
  "wellness"=>"Wellness");

$facts = array(
  "num_1" => "Veganism is a way of life that alters diet, clothing, and other
  decisions with the goal of ending exploitation of animals",
  "num_2" => "Vegan foods are free of all animal products such as meat, eggs,
  fish, and dairy.",
  "num_3" => "Ethical vegans also avoid the use of animal products like skin
  (leather or fur), feathers, and other things that cause animal suffering during production",
  "num_4" => "Approximately 5% of the US is vegetarian (close to 16 million
  people), and about half of those are vegan -- meaning about 7.5 million
  Americans abstain from all animal products.");

#function: if button is clicked then echo a fact from the array
function fact(){
  $rand_num = rand(1,4);
  $array_num = "num_" . (string)$rand_num;
  global $facts;
  echo "<p>" . $facts[$array_num] . "</p>";
  }
?>
