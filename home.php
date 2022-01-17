<?php
include ('connexion_BDD.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Bchiheb ShoP</title>

    <link href="css/themes/default/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-slider.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/shop.css" rel="stylesheet">
    <style>
      button {
      display: inline-block;
      background-color:#FF6600;
      border-radius: 10px;
      border: 4px double #cccccc;
      color: #eeeeee;
      text-align: center;
      font-size: 12px;
      padding: 20px;
      width: 100px;
      transition: all 0.5s;
      cursor: pointer;
      margin: 5px;
	  margin-left:50%;
      }
      button span {
      cursor: pointer;
      display: inline-block;
      position: relative;
      transition: 0.5s;
      }
      button span:after {
      content: '\00bb';
      position: absolute;
      opacity: 0;
      top: 0;
      right: -20px;
      transition: 0.5s;
      }
      button:hover {
      background-color:#FF6633;
      }
      button:hover span {
      padding-right: 2px;
      }
      button:hover span:after {
      opacity: 1;
      right: 0;
      }
    </style>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color:#FF2020">
        <div class="container" >

            <div class="navbar-header" >
                  
                    
                </button>
				  
                  <img src="img/p31.png"  style="width:40%" alt="logo">	
                  <img src="img/logo.png"  style="width:10%" alt="logo">
                
            </div>
          
                

                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Mon Panier</p>
            <table border = 0>
  <thead>
    <th>Nom</th> 
    <th>&ensp; &ensp; Quantite </th>
	<th> &ensp; &ensp; Prix</th>
    
  </thead>
  <tbody>
    <?php 
	
	$result = mysqli_query($conn, "select * from  articles where Etat='1' and Quant != '0'");
	
      while ($row = mysqli_fetch_array($result)) {
    ?>
    <tr>
      <td> <?php echo $row['Nom_AR']; ?></td>
	  <td> &ensp;  &ensp;  <?php echo $row['Quant']; ?></td>
      <td> &ensp; &ensp; <?php echo $row["Quant"] * $row["Prix_AR"]; ?></td>
	  
      <td>
	   &ensp;  &ensp; &ensp;
	    <a href="delete_pan.php?id_Ar=<?php echo $row['id_Ar'];?>">  <i class="fa fa-trash-o" style="font-size:24px";> </i>  </a>
	  </td>
    </tr>   
    <?php 
      }
	  
    ?> 
  </tbody>
</table>
<br><br>
   <?php 
$sum= 0;   
    
$result2 = mysqli_query($conn,"SELECT * FROM articles where Etat = '1'"); 
while($row11 = mysqli_fetch_array($result2)){ 
 $sum = $sum + ($row11["Quant"] * $row11["Prix_AR"]);


}echo"<strong>Total prix: &ensp;  &ensp;</strong>"; 
echo $sum;
echo"<strong>DA</strong>";
    ?> 
	 &ensp;  &ensp; &ensp; &ensp;  &ensp; &ensp; &ensp;  &ensp; &ensp; &ensp; 
	  &ensp;  &ensp; &ensp; &ensp;  &ensp; &ensp; &ensp;  &ensp; &ensp; &ensp;
	   &ensp;  &ensp; &ensp; &ensp;  &ensp; &ensp;
	   <br>
	   <br>
	   <br>
	   <br><br><br>
	     <h4 class="pull-left" style="background-color:#FF9933"> Online VegeMart  </h4>
		  <br> <br>
		  
            <strong>&ensp; &ensp; Mangez avec plaisir des fruits et des légumes variés. Si votre 
                tout-petit vous voit manger ces aliments, il aura tendance à vous imiter. </strong>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="img/p2.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/p1.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/vm.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/m1.jpg" alt="">
                                </div>
                               
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">

          
					<br>
				 
				<?php 
				$result = mysqli_query($conn, "select * from  articles where Type ='legumes'");
				
                while ($row = mysqli_fetch_array($result)) {
    ?>

	<div class="col-sm-4 col-lg-4 col-md-4">
                <div class="thumbnail">
				<?php echo ' <img  src="img/'.$row['pic_Ar'].'"  width="320" height="150";> '; ?>
                  
                    <div class="caption">
                        <h4 class="pull-right" > <?php echo $row['Prix_AR']; ?> DA</h4>
                        <a href="#"><?php echo $row['Nom_AR']; ?></a>
                        
                        <p><?php echo $row['Descr']; ?></p>
						
          <form action="add_pan.php?id_Ar=<?php echo $row['id_Ar'];?>" method="POST" class=" " enctype="multipart/form-data" >   
		      
         	<select name="choisi" class="float-none" style="height:45px; margin-left:20px;" required="">
		         
			    <option value="">0</option>
				<option value="0.5">0.5</option>
                <option value="1">1</option>
				 <option value="1.5">1.5</option>
                <option value="2">2</option>
				<option value="2.5">2.5</option>
                <option value="3">3</option>
				<option value="3.5">3.5</option>
                <option value="4">4</option>
				<option value="4.5">4.5</option>
                <option value="5">5</option>
				<option value="5.5">5.5</option>
                <option value="6">6</option>
				<option value="6.5">6.5</option>
			    <option value="7">7</option>
				<option value="7.5">7.5</option>
                <option value="8">8</option>
				<option value="8.5">8.5</option>
                <option value="9">9</option>
				<option value="9.5">9.5</option>
                <option value="10">10</option>

</select>
 </div>
				   <button>
    <span>Envoyer</span>
    </button>
                   </form>
                </div><!-- /.thumbnail -->
			</div>

<?php } ?>    

				 						  
										   <br>
										   
										   			<?php 
				$result = mysqli_query($conn, "select * from  articles where Type ='fruits'");
                while ($row = mysqli_fetch_array($result)) {
    ?>

	<div class="col-sm-4 col-lg-4 col-md-4">
                <div class="thumbnail">
				<?php echo ' <img  src="img/'.$row['pic_Ar'].'"  width="320" height="150";> '; ?>
                  
                    <div class="caption">
                        <h4 class="pull-right" > <?php echo $row['Prix_AR']; ?> DA</h4>
                        <a href="#"><?php echo $row['Nom_AR']; ?></a>
                        
                        <p><?php echo $row['Descr']; ?></p>
						
          <form action="add_pan.php?id_Ar=<?php echo $row['id_Ar'];?>" method="POST" class=" " enctype="multipart/form-data" >   
		      
         	<select name="choisi" class="float-none" style="height:45px; margin-left:20px;" required="">
		         
			    <option value="">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
			    <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>

</select>
 </div>
				   <button>
    <span>Envoyer</span>
    </button>
                   </form>
                </div><!-- /.thumbnail -->
			</div>

<?php } ?>
                </div><!-- /.row -->

            </div><!-- col-md-9 -->

        </div><!-- /.row -->


    </div><!-- /.container -->

   

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-slider.js"></script>
    <script src="js/app.js"></script>

</body>
</html>