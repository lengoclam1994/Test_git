<?php require_once('config.php') ?>

<?php require_once(ROOT_PATH .'/includes/header.php') ?>

<?php require_once( ROOT_PATH . '/includes/database_conn.php') ?>
<?php $post = getPostById(); ?>
<body>

  <!-- Navigation -->

  <?php require_once(ROOT_PATH .'/includes/nav.php') ?>
  <!-- Page Content -->
  <div class="container">
      
    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3"><?php echo $post['title']?></h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="https://blackrockdigital.github.io/startbootstrap-modern-business/index.html">Home</a>
      </li>
      <li class="breadcrumb-item active"><?php echo $post['category']?></li>
    </ol>

    <div class="row">

      <!-- Blog Entries Column -->
<div class="col-lg-8">

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="<?php echo BASE_IMAGE.$post['image']?>" alt="">

        <hr>

        <!-- Date/Time -->
        <p>Posted on <?php echo date( "F d, Y", strtotime($post['created_at'])) ?></p>

        <hr>

        <!-- Post Content -->
        <?php echo $post['content']?>

        <hr>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Categories Widget -->
      <?php require_once(ROOT_PATH .'/includes/categories.php') ?>


      <?php require_once(ROOT_PATH .'/includes/side_widget.php') ?>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

<?php require_once(ROOT_PATH .'/includes/footer.php') ?>