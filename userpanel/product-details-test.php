<?php include("header.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <?php include("title.php");?>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,700' rel='stylesheet' type='text/css'>

    <link href="css/epoch.min.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">

    <!-- SugarRush CSS -->
    <!-- <link href="css/sugarrush.css" rel="stylesheet"> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- product view -->
    <link rel="stylesheet" href="css/multizoom.css" type="text/css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>

<script type="text/javascript" src="js/multizoom.js">

// Featured Image Zoomer (w/ optional multizoom and adjustable power)- By Dynamic Drive DHTML code library (www.dynamicdrive.com)
// Multi-Zoom code (c)2012 John Davenport Scheuer
// as first seen in http://www.dynamicdrive.com/forums/
// username: jscheuer1 - This Notice Must Remain for Legal Use
// Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more

</script>

<script type="text/javascript">

jQuery(document).ready(function($){

	$('#image1').addimagezoom({ // single image zoom
		zoomrange: [3, 10],
		magnifiersize: [300,300],
		magnifierpos: 'right',
		cursorshade: true,
		largeimage: 'hayden.jpg' //<-- No comma after last option!
	})


	$('#image2').addimagezoom() // single image zoom with default options
	
	$('#multizoom1').addimagezoom({ // multi-zoom: options same as for previous Featured Image Zoomer's addimagezoom unless noted as '- new'
		descArea: '#description', // description selector (optional - but required if descriptions are used) - new
		speed: 1500, // duration of fade in for new zoomable images (in milliseconds, optional) - new
		descpos: true, // if set to true - description position follows image position at a set distance, defaults to false (optional) - new
		imagevertcenter: true, // zoomable image centers vertically in its container (optional) - new
		magvertcenter: true, // magnified area centers vertically in relation to the zoomable image (optional) - new
		zoomrange: [3, 10],
		magnifiersize: [250,250],
		magnifierpos: 'right',
		cursorshadecolor: '#fdffd5',
		cursorshade: true //<-- No comma after last option!
	});
	
	$('#multizoom2').addimagezoom({ // multi-zoom: options same as for previous Featured Image Zoomer's addimagezoom unless noted as '- new'
		descArea: '#description2', // description selector (optional - but required if descriptions are used) - new
		disablewheel: true // even without variable zoom, mousewheel will not shift image position while mouse is over image (optional) - new
				//^-- No comma after last option!	
	});
	
})

</script>
    <!-- end here -->
    
  </head>

  <body class="">
    <div class="animsition">  
    
    <?php include("sidebar.php");?>


      <main id="playground">

            
      
         <?php include("top.php");?>
   


        <!-- PAGE TITLE -->
        <section id="page-title" class="row">

          <div class="col-md-8">
            <h1>Product Detail</h1>
            <!--<p><a href="#" target="_blank" class="btn btn-danger btn-sm">DataTables documentation</a></p>-->
          </div>

          <div class="col-md-4">

            <ol class="breadcrumb pull-right no-margin-bottom">
              <li><a href="#">Product</a></li>
              <li><a href="#">Product Detail</a></li>
             
            </ol>

          </div>
        </section> <!-- / PAGE TITLE -->

        <div class="container-fluid">
          <div class="row">

            <div class="col-md-12">

              <section class="panel panel-primary">
                <header class="panel-heading">
                  <h4 class="panel-title">Product Detail</h4>
                </header>
                <div class="panel-body">

					<div class="col-md-4">
                    
                        <div class="targetarea" style="border:1px solid #eee">
                        	<img id="multizoom1" alt="zoomable" title="" src="images/apple-ipad-air-2-a1566.jpg" style="max-height:250px;" />
                        </div>
                        <div id="description">Apple iPad Air</div>
                        <div class="multizoom1 thumbs">
                        <a href="images/apple-ipad-air-2-a1566.jpg" data-large="images/apple-ipad-air-2-a1566.jpg" data-title="Apple iPad Air" style="max-height:250px;">
                        
                        <img src="images/apple-ipad-air-2-a1566.jpg" alt="Apple iPad Air" title="" style="max-height:50px;" /></a> 
                        <a href="images/Apple-iPad-Air-2.jpg" data-lens="false" data-magsize="150,150" data-large="images/Apple-iPad-Air-2.jpg" data-title="Apple iPad Air" style="max-height:250px;">
                        <img src="images/Apple-iPad-Air-2.jpg" alt="Apple iPad Air" title="" style="max-height:50px;" /></a> 
                        <a href="images/air-scene0-left-shadow.png" data-large="images/air-scene0-left-shadow.png" data-title="Apple iPad Air" style="max-height:250px;">
                        
                        <img src="images/air-scene0-left-shadow.png" alt="Apple iPad Air" title="" style="max-height:50px;" /></a> 
                        <a href="images/Apple-iPad-Air-a2.jpg" data-large="images/Apple-iPad-Air-a2.jpg" data-title="Apple iPad Air" style="max-height:250px;">
                        
                        <img src="images/Apple-iPad-Air-a2.jpg" alt="Apple iPad Air" title="" style="max-height:50px;" /></a>
                        </div>
                        
                    </div>
                    
                    <div class="col-md-8">
                    	<br /><br />
                        <table width="100%" class="table table-striped table-hover table-bordered">
                          <tr>
                            <td><strong>Product Price :</strong></td>
                            <td>$459.99</td>
                          </tr>
                          <tr>
                            <td><strong>Points :</strong></td>
                            <td>123</td>
                          </tr>
                          <tr>
                            <td><strong>Direct Commission :</strong></td>
                            <td>123</td>
                          </tr>
                          <tr>
                            <td><strong>Details :</strong></td>
                            <td>Details goes here...</td>
                          </tr>
                          <tr>
                            <td colspan="2"><a href="#" class="btn btn-primary">Buy Now</a></td>
                          </tr>
                        </table>
                        
                    </div>

                </div>

           	</section>
            

            </div> <!-- /col-md-6 -->

  

          </div>

      
        </div> <!-- / container-fluid -->
        
         <div class="col-md-12 text-center">

 <!--<a href="bh_export_binary_income.php?userid=<?=$userid;?>"><input type="submit" name="update" value="Export in CSV" class="btn btn-primary"></a> -->


          </div>


     <?php include("footer.php");?>


    </main> <!-- /playground -->


    <!-- - - - - - - - - - - - - -->
    <!-- start of NOTIFICATIONS  -->
    <!-- - - - - - - - - - - - - -->
     <?php include("rightside-panel.php");?>
    <!-- - - - - - - - - - - - - -->
    <!-- start of NOTIFICATIONS  -->
    <!-- - - - - - - - - - - - - -->

    <div class="scroll-top">
      <i class="ti-angle-up"></i>
    </div>
  </div> <!-- /animsition -->

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/raphael-min.js"></script>
  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/jquery.animsition.min.js"></script>
  <script src="js/jquery.dataTables.min.js"></script>

  <script src="js/includes.js"></script>
  <script src="js/sugarrush.js"></script>
  <script src="js/sugarrush.tables.js"></script>
  
  
  </body>
</html>