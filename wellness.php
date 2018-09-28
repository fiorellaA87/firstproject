<?php
include("includes/init.php");

$current_page_id="wellness";
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />

  <title>Wellness - <?php echo $title;?></title>
</head>

<body>
  <?php include("includes/header.php");?>
  <div id='right'>
    <?php include("includes/about.php")?>
    <?php include("includes/references.php")?>
    <?php include("includes/sub_mes.php")?>
  </div>

  <h1>The Vegan Lifestyle</h1>

  <div id='left'>
    <h2 id="article-title">Benefits of Veganism</h2>
    <!--Information gathered from https://www.vegansociety.com/go-vegan/why-go-vegan,
    http://www.ilovevegan.com/resources/benefits-of-a-vegan-lifestyle/, -->
    <p>Veganism is a type of lifestyle where there is no consumption of animals or
      animal products. This also includes the use of goods such as leather and
      beeswax candles. This way of living can be motivated by different reasons
      depending on the person. Some reasons include:
      <ul>
        <li>Having better health</li>
        <li>Living a more ethical life</li>
        <li>Reduced contribution to pollution from agriculture</li>
        <li>Reduced strain on food insecurity for others</li>
      </ul>
    </p>

    <!-- Information gathered from https://www.healthline.com/nutrition/vegan-diet-benefits -->
    <p>Veganism has many health benefits that have been studied thoroughly such as:
        <ul>
          <li>Reduced chance of heart linked diseases that have been correlated
            with the consumption of animals.</li>
            <li>More energy.</li>
            <li>Reduced Type 2 Diabetes</li>
            <li>Help with weight loss</li>
          </ul>
    </p>

    <h2 id="article-title">Living an Active Lifestyle</h2>
    <!-- Information gathered from https://www.verywellfit.com/simple-ways-to-live-a-healthy-lifestyle-1231193,
    https://www.webmd.com/fitness-exercise/features/do-you-have-sitting-disease#3 -->
    <p>Maintaining an active life is also a large part of wellness and veganism.
    Many shy away from the word "active" but it doesn't have to be a boring visit
    to the gym or spendisng an hour on the treadmill. When talking about a healthy
    and active way of living, we are talking about the small steps one can take
    to keep in motion such as:
      <ul>
        <li>Taking the stairs instead of the elevator</li>
        <li>Walking to nearby stores, job, or class</li>
        <li>Take 10 minutes to stretch everyday</li>
        <li>Do chores that require physical activity</li>
      </ul>
    </p>

    <h2>Random Vegan Fact: (Refresh this page!)<h2>
      <?php fact();?>

    </div>
  </body>

  <?php include('includes/footer.php');?>

</html>
