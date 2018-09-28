<?php
include("includes/init.php");

$current_page_id="index";
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
  <title>Home - <?php echo $title;?></title>
</head>

<body>
  <?php include("includes/header.php");?>
<div id='right'>
  <?php include("includes/about.php")?>
  <?php include("includes/references.php")?>
  <?php include("includes/sub_mes.php")?>
</div>
<div id="left">

<div id='slides'>
    <img id='homepic1' src='images/fit4.jpg' alt='fit4'/>
    <img id='homepic2' src='images/food2.jpg' alt='food2'/>
</div>

  <figcaption><a href="http://dailyhive.com/montreal/montreal-vegan-food-festival-2017">http://dailyhive.
    com/montreal/montreal-vegan-food-festival-2017</a><figcaption>
  <figcaption2><a href="http://thechalkboardmag.com/breaking-out-of-bad-habits">http://thechalkboardmag.com/breaking-out-of-bad-habits</a></figcaption>

  <div class='pop_recent'>
    <h2 id="article-title">Popular: <a href="recipes.php">Vegan Chocolate Mousse</a></h2>
  </div>

  <div class='pop_recent'>
    <h2 id="article-title">Most Recent: <a href="fitness.php">Quick 20 Minute Yoga Workout</a></h2>
  </div>
</div>
</body>

<?php include('includes/footer.php');?>

</html>
