<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
   <meta name="description" content="Address Reference Book" />
   <meta name="keyword" content="Address Reference Book" />
   <meta name="author" content="SAR" />
   <!-- Mobile Specific Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

   <!-- Libs CSS -->
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <link href="css/font-awesome.min.css" rel="stylesheet">

   <!-- On Scroll Animations -->
   <link href="css/animate.css" rel="stylesheet">

   <!-- Template CSS -->
   <link href="css/style.css" rel="stylesheet">  

   <!-- Responsive CSS -->
   <link href="css/responsive.css" rel="stylesheet"> 

   <!-- Favicons -->	
   <link rel="shortcut icon" href="img/icons/favicon.ico">

   <!-- Google Fonts -->	
   <link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet" />

   <!-- 
      HTML shim and Response.js files are local server. IE8 support of HTML5 elements and media queries
   -->
   <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
   <![endif]-->

   <title>Address Reference Book</title>
</head>
<body>
   <div class="content-wrapper">
      <section class="intro">
         <div class="container">
            <header id="non-header">
               <div class="row">
                  <!-- Logo Image -->
                  <div id="logo-image" class="col-md-6 col-xs-6">
                     <a href="/">
                        <img src="" alt="logo" role="banner" />
                     </a> 
                  </div>
                  <!-- Social Media Icons -->
                  <div id="social-icons-wrap" class="col-md-6 col-xs-6 text-right">
                     <ul class="social-icons clearfix">
                        <li>
                           <a href="#" class="he-social ico-facebook">
                              <i class="fa fa-facebook"></i>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="he-social ico-twitter">
                              <i class="fa fa-twitter"></i>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="he-social ico-google">
                              <i class="fa fa-google-plus"></i>
                           </a>   
                        </li>
                     </ul>
                  </div>
               </div>
            </header>
         </div> 
      </section>
   </div>
   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <form name="myForm" id="techForm" method="post">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
                  <h4 class="modal-title">Set Option</h4> 
               </div>
               <div class="modal-body">
                  <label for="technology">Select a Technology : </label>
                  <input type="radio" name="technology" value="PHP" > PHP
                  <input type="radio" name="technology" Value="AngularJs" > AngularJs
                  <input type="radio" name="technology" value="jQuery" checked="checked"> jQuery
                  <br />
               </div>
               <div class="modal-footer">
                  <input type="submit" value="Set" class="btn btn-default" >
               </div>
            </form>   
         </div>
      </div>
   </div>
   
   <!-- External Scripts-->
   <script src="js/jquery-1.11.2.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   
   <!--[if lt IE 9]>
   <script src="js/html5shiv.js"></script>
   <script src="js/respond.min.js"></script>
   <![endif]-->
   
   <script>
      $(window).load(function() {
         $('#myModal').modal('show');
         $('#techForm').submit(function() {
            var technology = $("input:radio[name=technology]:checked").val();
            switch(technology) {
               case 'PHP': alert('1');
                  window.open('http://localhost/addressBook/addressBook/php/', 'target="_self"');
                  break;
               case 'AngularJs': alert('2');
                  window.open('http://localhost/addressBook/addressBook/angular/');
                  break;
               case 'jQuery': alert('3');
                  window.open('http://localhost/addressBook/addressBook/jquery/');
                  break;
               default: alert('4');
                  window.open('http://localhost/addressBook/addressBook/jquery/');
                  break;
            }
         });
      });
//      $(document).ready(function(){
//         
//      });
   </script>
</body>
</html>
