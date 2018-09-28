<?php
include("includes/init.php");

$current_page_id="fitness";
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />

  <title>Fitness - <?php echo $title;?></title>
</head>

<body>
  <?php include("includes/header.php");?>

  <div id='right'>
    <?php include("includes/about.php")?>
    <?php include("includes/references.php")?>
    <?php include("includes/sub_mes.php")?>
  </div>

  <div id='left'>
    <h1>Quick 20 Minute Yoga Workout</h1>

    <iframe id='yogavid' src="https://www.youtube.com/embed/5oyN2Sf3MzI"
    frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

    <!-- Information taken from http://www.osteopathic.org/osteopathic-health/about
    -your-health/health-conditions-library/general-health/Pages/yoga.aspx -->

    <p id=yoga_p >Yoga is a fitness activity that has proven to have many benefits. It dates
    back hundreds of years ago and is still practiced until today. Yoga has been
    renowned for greatly increasing flexibility but it also increasing muscle strength,
    improve respiration and energy, and protect from injury. In today's
    modern society, many people are constricted to partcipate in other activities
    outside of their daily jobs and responsibilities. This video shows anyone
    from beginner to adavanced level a quick yoga workout that will only take
    up 20 minutes of their time. The exercise does not require any equipment and
    can be done almost anywhere.<p>
  </div>

  <?php include('includes/footer.php');?>

  </body>
</html>
