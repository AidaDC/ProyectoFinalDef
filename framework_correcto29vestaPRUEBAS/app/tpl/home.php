<section>
<?php 

      if(isset($_SESSION['homeconcat'])){

    echo $_SESSION['homeconcat'];}else{

      include 'sthome.php';
    }

     ?>
    }
  </section>
  <?php include 'footer.php';?>