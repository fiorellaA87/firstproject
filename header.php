<header>
  <img id='leaf_logo' src='images/leaf.png' alt='leaf logo' width='150px' height='150px'/>
  <img id='vegan_logo' src='images/vegan-logo.png' alt='vegan logo' width='150px' height='150px'/>
  <!-- images taken from google -->
  
  <h1 id="title"><?php echo $title; ?></h1>

  <nav id="menu">
    <ul>
      <?php
      foreach($pages as $page_id => $page_name) {
        // utilize the current location to style it differently
        if ($page_id == $current_page_id) {
          $css_id = "id='current_page'";
        } else {
          $css_id = "";
        }
        echo "<li><a " . $css_id . " href='" . $page_id. ".php'>$page_name</a></li>";
      }
      ?>
    </ul>
  </nav>
</header>
