<?php
  include('includes/header.php');
?>


    <div class="container">
       <div class="card main ">
          
                 <?php
                      include('includes/logo.php');
                      include('includes/menu.php');
                 ?>


                                <div class="mx-5 ">
                                  <div class="card mt-4 mb-4">                                    
                                      <h4 class="card-header bg-secondary text-warning"><i class="fa fa-list-alt"></i> Boutique</h4>
                                   
                                                  <?php

                                                        $sql = "SELECT * FROM produits";
                                                        $res = query($sql);
                                                        while ($row = fetch_array($res)) {
                                                    
                                                 ?>

                                         <div class="card my-2 mx-4">
                                           <div class="card-body ">
                                            <div class="card-img-top ">
                                              <img src="images/<?php echo $row['image_pro']; ?>" class="img-fluid" height="200" width="300">                                            
                                            </div>
                                              <h3 class="card-title "><?php echo $row['titre_pro'] ; ?></h3>
                                                <p><span class="badge badge-success"><?php echo $row['prix_pro'].' Dh'; ?></span></p>
                                                <p class="lead card-text"><?php echo $row['desc']; ?></p>
                                                <p><a href="produit.php?id=<?php echo $row['id_pro']; ?>" class="btn btn-info">Voir</a></p>
                                           </div>                                            
                                        </div>   
                                     
                                              <?php 
                                                  }
                                              ?>
                             
                                    </div>
                                </div>
    </div>
   </div>

<?php
  include('includes/footer.php');
?>