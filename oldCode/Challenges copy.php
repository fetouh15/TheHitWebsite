<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Challenges</title>
    <?php include_once("Navbar.html"); ?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">
        <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script>
            // Add your javascript here
            $(function() {
              getRemanningDays();
              });
              
              var getRemanningDays = function() {
                  var date = new Date();
                  var time = new Date(date.getTime());
                  time.setMonth(date.getMonth() + 1);
                  time.setDate(0);
                  var days =time.getDate() > date.getDate() ? time.getDate() - date.getDate() : 0;
                  days= days+" days left";
                  $('#remainingday').html(days);
              }
        </script>
</head>
<body style="background-color:#373537">

<!-- Navigation -->



<div class=" jumbotron" style="background-color:#373537">
   <div class="row">
    <div class="col-sm-12 col-md-6" >
        <div class="card" style="margin-bottom: 100px">
        <div class="card-header" style="background-color:#8F1924; color:white; text-align: center;">
        <h2>   Transformation challenge</h2>
       </div>
       <div class="card-body">
           <blockquote class="blockquote mb-0">
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a anteLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a anteLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a anteLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a anteLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a anteLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a anteLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a anteLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante</p>
               <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
           </blockquote>
       </div>
   </div>
        <div class="card">
            <div class="card-header" style="background-color:#8F1924; color:white; text-align: center;">
                <h2> Female Transformation Challenge</h2>
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a anteLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a anteLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a anteLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a anteLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a anteLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a anteLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a anteLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ant</p>
                    <footer class="blockquote-footer" id="remainingday"></footer>
                    
                </blockquote>
            </div>
        </div>
    </div>

    <div class="col-sm-0 col-md-6"  id="coolage"style=" background-image: url('img/coolage.jpg');   background-size: cover; height:910px; margin-top:15px;" ></div>


    </div>
</div>



<footer >
    <div class="fluid-container"style = "background-color:#222222;">
        <div class="row">
            
            <div class="block col-md-5 col-sm-5" id="footerhours">
                <h3>Opening Hours</h3>
                <dl class="dl-horizontal">
                    <dt>Sunday - Thursday </dt>
                    <dd><strong>10:00 am - 10:30 pm</strong></dd>
                    <dt>Saturday-Wednesday</dt>
                    <dd><strong>9:00 am - 11:30 pm</strong></dd>
                    
                </dl>
            </div>
            
            
            <!--/*=============================================================================*/-->
            
            <div class="block widget_text col-md-5 col-sm-5" id="footerhours">
                <h3>Contact Info</h3>
                <p>HIT fitness center, Kafr Abdou, Alexandria, Egypt.<br>
                <span><strong>Phone:</strong> </span> +201222660867<br>
                <span><strong>Email:</strong> </span> thehitfitness@gmail.com<br>
                <span><strong>instagram:</strong> </span> thehitfitness_<br>
                <span><strong>Facebook:</strong> </span> The Hit Fitness Center<br>
                </p>
                
            </div>
            
        </div>
</footer>

</body>
</html>











