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
            <h1>Summary / Payment</h1>
            <!--<p><a href="#" target="_blank" class="btn btn-danger btn-sm">DataTables documentation</a></p>-->
          </div>

          <div class="col-md-4">

            <ol class="breadcrumb pull-right no-margin-bottom">
              <li><a href="#">Product</a></li>
              <li><a href="#">Summary / Payment</a></li>
             
            </ol>

          </div>
        </section> <!-- / PAGE TITLE -->

        <div class="container-fluid">
          <div class="row">

            <div class="col-md-12">

              <section class="panel panel-primary">
                <header class="panel-heading">
                  <h4 class="panel-title">Summary</h4>
                </header>
                <div class="panel-body">
                
                	<div class="col-md-12 table-responsive">
                    
                    	<table class="table table-striped table-hover table-bordered">
                          <tr>
                            <td width="25%" align="center"><strong>Product</strong><br /><img src="images/apple-ipad-air-2-a1566.jpg" width="100" /></td>
                            <td width="75%"><strong>Apple iPad Air 2</strong></td>
                          </tr>
                          <tr>
                            <td width="25%"><strong>Price :</strong></td>
                            <td width="75%"><strong>$59.99</strong></td>
                          </tr>
                          <tr>
                            <td width="25%"><strong>Percentage :</strong></td>
                            <td width="75%"><select class="form-control"><option>50%</option><option>75%</option><option>100%</option></select></td>
                          </tr>
                          <tr>
                            <td width="25%"><strong>Diect sales points :</strong></td>
                            <td width="75%">100</td>
                          </tr>
                          <tr>
                            <td width="25%"><strong>TBC sales poins :</strong></td>
                            <td width="75%">0</td>
                          </tr>
                          <tr>
                            <td width="25%"><strong>Matching sales points :</strong></td>
                            <td width="75%">0</td>
                          </tr>
                          <tr>
                            <td width="25%"><strong>First Name :</strong></td>
                            <td width="75%">Niel</td>
                          </tr>
                          <tr>
                            <td><strong>Last Name :</strong></td>
                            <td>Smith</td>
                          </tr>
                          <tr>
                            <td><strong>Country :</strong></td>
                            <td>South Africa</td>
                          </tr>
                          <tr>
                            <td><strong>City/State :</strong></td>
                            <td>Cape Town</td>
                          </tr>
                          <tr>
                            <td><strong>Mobile Number 1 :</strong></td>
                            <td>123456789</td>
                          </tr>
                          <tr>
                            <td><strong>Mobile Number 2 :</strong></td>
                            <td>987654321</td>
                          </tr>
                          <tr>
                            <td><strong>Full Address :</strong></td>
                            <td>Adress Goes Here...</td>
                          </tr>
                          <tr>
                            <td><h3><strong>TOTAL PAYMENT :</strong></h3></td>
                            <td><h3><strong>$56.99</strong></h3></td>
                          </tr>
                        </table>

                    </div>


                </div>

           	</section>
            

            </div> <!-- /col-md-12 -->
            
            
            
            
            
            
            <div class="col-md-12">

              <section class="panel panel-primary">
                <header class="panel-heading">
                  <h4 class="panel-title">Payment</h4>
                </header>
                <div class="panel-body">
                
                	<div class="col-md-12">
                    
                    	<div class="col-md-6">
                    
                            <div class="form-group">
                                <label for="exampleInputAddress">E-Wallet (<?php echo "Available Amount ".Currency.getEwalletAmount($userid); ?>)</label>
                                <div class="input-group">
                                    <span class="input-group-addon"></span>
                                    <input type="text" name="e_wallet" onblur="return ewalPerValue();"  class="form-control" id="e_wallet">
                            	</div>
                             </div>
                    	
                        </div>
                        
                        <div class="col-md-6">

                            <div class="form-group">
                              <label for="exampleInputAddress">Voucher Wallet (<?php echo "Available Amount ".Currency.getVwalletAmount($userid); ?>)</label>
                              <div class="input-group">
                                <span class="input-group-addon"></span>
                                <input type="text" name="v_wallet" onblur="return voucPerValue();" class="form-control" id="v_wallet">
                                
                                <input type="hidden" name="product_id" value="<?php if(isset($_GET['pid']) && !empty($_GET['pid'])){ echo $_GET['pid']; } ?>">
                                
                                <input type="hidden" name="invoiceno" value="<?php if(isset($_GET['invoice_no']) && !empty($_GET['invoice_no'])){ echo $_GET['invoice_no']; } ?>">
                                
                                <input type="hidden" name="grandToal" value="<?php echo $grandTotal; ?>">
                              </div>
                            </div>
                            
						</div>
                    
                    	<div class="col-md-12 margin-bottom-10">
                        
                        	<input type="text" class="form-control" placeholder="Transaction pin code" />
                        
                        </div>
                        
                        <div class="col-md-6 margin-bottom-10">
                        
                        	<input type="submit" class="btn btn-primary" value="Checkout" />
                        
                        </div>

                    </div>


                </div>

           	</section>
            

            </div> <!-- /col-md-12 -->

  

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