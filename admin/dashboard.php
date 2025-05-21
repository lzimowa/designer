<?php

//initialize the session		
	
    if (!isset($_SESSION)) {
    session_start();
    }


    if ( !isset( $_SESSION['loggedIn'] ) ) { // user is not logged in
        header( 'Location: index.html' ); // redirect to login.php
    }

?>
<!doctype html>
<html>
 <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
        
         <link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.min.css">
    <link href="../css/responsive.css" rel="stylesheet">
    
    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="../css/color/light-red.css" title="light-red">

    <!-- Custom Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="../css/style.css">
        
	
	    
    </head>
    <body>

      
      
        <h1><img src="../images/logo.png" width="212" height="44" alt=""/></h1>
        <div class="form-group">
        
        <fieldset>
          <legend>Event Details | <a href="../index.html" style="font-size:14px" target="_blank">Visit Site</a></legend>
          
          <div align="right" style="margin-right:20px">Welcome, <b><?php echo $_SESSION['firstName']; ?></b>&nbsp;<a href="logout.php">logout</a></div>
          
        
    <p>
        
          
          <div style="margin-left:50px">
            <form role="form" class="col-md-12 form-inline form-horizontal" method="post" id="dashboardForm">
              
              
              <label class="control-label col-sm-5">Client Name:</label>
              <div class="input-group col-sm-7">
                <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name" required>
                </div>
              <br><br>
              <label class="control-label col-sm-5">Address:</label>
              <div class="input-group col-sm-7">
                <textarea id="address" name="address" class="form-control" required>
                
                </textarea>
                </div>
                
                <br><br>
              <label class="control-label col-sm-5">Contact No.:</label>
              <div class="input-group col-sm-7">
                <input type="text" id="contact" name="contact" class="form-control" placeholder="Enter Phone" required>
                </div>
                
                <br><br>
              <label class="control-label col-sm-5">Purchase No.:</label>
              <div class="input-group col-sm-7">
                <input type="text" id="purchase" name="purchase" class="form-control" placeholder="Enter Purchase No." required>
                </div>
                
                <br><br>
              <label class="control-label col-sm-5">Payment Method:</label>
              <div class="input-group col-sm-7">
                
                <select id="payment" name="payment" class="form-control">
                	<option value=""></option>
                	<option value="ecocash">Ecocash</option>
                	<option value="easycall">Easycall</option>
                	<option value="telecash">Telecash</option>
                	<option value="visa">Visa</option>
                </select>
                
                </div>
                
                <br><br>
              <label class="control-label col-sm-5">Ticket No.:</label>
              <div class="input-group col-sm-7">
                <input type="text" id="ticket" name="ticket" class="form-control" placeholder="Enter Ticket No" required>
                </div>
              
              
              <p>
        <div id="message" align="center"></div>
        <p>
              <p>&nbsp;</p>
              <button type="submit" class="btn btn-primary pull-right btn-sm RbtnMargin">Submit</button>
              </form>
          </div>
              
          
          
      
        <script src="../js/jquery-2.1.1.min.js"></script>
	     <script src="../js/jquery-ui.js"></script>
        <script src="../js/adminscript.js"></script>
      
    </body>
</html>