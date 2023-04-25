<?php
$menu_items = wp_get_nav_menu_items( 'main-menu' ); 
// echo "<pre>";
// var_dump($menu_items);
// echo "</pre>";
?>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="<?php echo get_home_url(); ?>">Trinity News</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php
          foreach ($menu_items as $item) :
            # code...
        ?>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a>
          </li>
        <?php
          endforeach
        ?>

      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

