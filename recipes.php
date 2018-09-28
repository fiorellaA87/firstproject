<?php
include("includes/init.php");

$current_page_id="recipes";
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />

  <title>Recipes - <?php echo $title;?></title>
</head>

<body>
  <?php include("includes/header.php");?>
  <div id='right'>
    <?php include("includes/about.php")?>
    <?php include("includes/references.php")?>
    <?php include("includes/sub_mes.php")?>
  </div>

  <div id='left'>
    <h1>Vegan Chocolate Mousse</h1>
    <!-- Recipe and pictures taken from minimalistbaker.com -->
    <img id='mousse' src='images/mousse.jpg' alt='mousse' width='30%' height='52%'/>
    <img id='mousse' src='images/mousse3.jpg' alt='mousse3' width='30%' height='50%'/>
    <img id='mousse' src='images/mousse1.jpg' alt='mousse1' width='30%' height='51%'/>

    <div id=rec_box>
        <h4>Preparation Time: 20 minutes</h4>
        <h4>Servings: Two</h4>
    </div>

    <h2 id="article-title">Ingredients</h2>
      <ul>
        <li>1/2 cup of cocoa powder</li>
        <li>3/4 cup of chopped cocoa butter</li>
        <li>3/4 tablespoons of powdered sugar</li>
        <li>1 can of coconut milk</li>
        <li>6-9 pitted mejool dates</li>
        <li>pinch of salt</li>
      </ul>

      <h2 id="article-title">Instructions</h3>
        <ol>
          <li>In a saucepan, combine the cocoa powder, cocoa butter, and 3/4 of the
            can of coconut milk. Warm the mixture over low heat and whisk together.</li>
          <li>Once mixed, add remaining coconut milk, then remove from heat and add
            sugar and vanilla extract.</li>
          <li>Put mixture in a blender along with the dates and blend on high until
            smooth.</li>
          <li>Taste and adjust flavor as needed such as adding more cacao powder.</li>
          <li>Transfer to a bowl, refrigerate for 3 hours or until thickened.</li>
        </ol>
      </div>

    </body>
  <?php include('includes/recipefooter.php');?>
</html>
