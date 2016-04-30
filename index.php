    <html>


    <head>
    <title>Bloom shop
    </title>
    <link rel="shortcut icon" href="fav-icon.gif" />
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
    <script>
	function _(x){
		return document.getElementById(x);
	}
	      window.onload=function(){
			  document.getElementById('loginanchor').onclick=function(){
				document.getElementById('login').style.display="block";
				document.getElementById('login').style.backgroundcolor="#3195C9";
				document.getElementById('login').style.color="#FFO";
				  return false;
			  } 
		  }
	
	</script>
    </head>
    <body>
    <?php include_once('include.php'); ?>
        <div class="main_wrap">
        <div class="main">
             <div class="slider_box">
               <div class="slider">
                <ul>
                  <li><a href="#"><img src="img/img1.jpg" height="340px" width="540px" /></a></li>
                  <li><a href="#"><img src="img/img2.jpg" height="340px" width="540px"/></a></li>
                  <li><a href="#"><img src="img/img3.jpg" height="340px" width="540px"/></a></li>
                  <li><a href="#"><img src="img/img4.jpg" height="340px" width="540px"/></a></li>
                  <li><a href="#"><img src="img/img5.jpg" height="340px" width="540px"/></a></li>
                  <li><a href="#"><img src="img/img6.jpg" height="340px" width="540px"/></a></li>
                  <li><a href="#"><img src="img/img1.jpg" height="340px" width="540px"/></a></li>
                </ul>
               </div>
            </div><!--end of slider box-->
            <div class="main_middle">
            <h2>Welcome</h2>
        <p>Hi,this is my first e-commerce website.Hi,this is my first e-commerce website.Hi,this is my first e-commerce website.Hi,this is my first e-commerce website.
        Hi,this is my first e-commerce website.Hi,this is my first e-commerce website.
        Hi,this is my first e-commerce website.Hi,this is my first e-commerce website.
        Hi,this is my first e-commerce website.Hi,this is my first e-commerce website.Hi,this is my first e-commerce website.Hi,this is my first e-commerce website.
        Hi,this is my first e-commerce website.Hi,this is my first e-commerce website.
        </p>

            </div><!--end of main_middle-->
            <div class="main_bottom">
            <h1>New products</h1>
            <div class="product_container">
                <div class="products">
                <a href="#"><img src="img/img1.jpg" height="190px" width="190px"/>
                <span>Product Name</span>
                <span>Product Price </span>
                
                </a>
                </div>
                 <div class="products">
                <a href="#"><img src="img/img1.jpg" height="190px" width="190px"/>
                    <span>Product Name</span>
                    <span>Product Price </span>
                
                </a>
                </div>
                 <div class="products">
                <a href="#"><img src="img/img1.jpg" height="190px" width="190px"/>
                    <span>Product Name</span>
                    <span>Product Price </span>
                
                </a>
                </div>
                 <div class="products">
                <a href="#"><img src="img/img1.jpg" height="190px" width="190px"/>
                <span>Product Name</span>
                <span>Product Price </span>
                </a>
                </div>
                
            </div>
            </div><!--end of main_bottom-->
        
        </div><!--end of main-->
        </div><!-- end of main wrap-->
         <?php include_once('fotter.php'); ?>
        </body>


</html>

<?php




?>