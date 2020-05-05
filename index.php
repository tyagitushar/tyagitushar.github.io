<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
    <link rel="stylesheet" href="mystyle.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Hello, world!</title>
    
		
  </head>
  <body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#">merekitab</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <form class="form-inline my-2 my-lg-0" id="myform">
      <input class="form-control mr-sm-2 col-lg-4" type="search" placeholder="Search" id="title">
      <input class="form-control mr-sm-2 col-lg-2" type="search" placeholder="Author" id="author">
      <input class="form-control mr-sm-2 col-lg-2" type="search" placeholder="Publisher" id="publisher">
      <button class="btn  my-2 my-sm-0" type="submit" id="search">Search</button>
    </form>
    <div class="navstyle">
   <a href="advanceSearch.php"> <button class="btn  my-2 my-sm-0" type="submit" > Advance Search</button></a>
    </div>
  </div>
</nav>
   <!-- <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark col-12">
            <a class="navbar-brand col-1" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse col-9" id="navbarSupportedContent">
                <form class="form-inline my-2 my-lg-0 col-12" id="myform">
                <input class="form-control  col-4" type="search" placeholder="Title" aria-label="Search" id="title">
                <input class="form-control  col-3" type="search" placeholder="Author" aria-label="Search" id="author">
                <input class="form-control  col-3" type="search" placeholder="Publisher" aria-label="Search" id="publisher">
                <button class="btn btn-outline-success my-2 my-sm-0 col-2" type="submit" id="search">Search</button>
                </form>
            </div>
            <div class="col-2">
                <a href="advanceSearch.php"><button class="btn btn-outline-success float-right" type="submit">advance search</button></a>
            </div>
        </nav>
    </div> -->
   <!-- FIRST SLIDER-->
    <section class="firstslider mt-2">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" data-pause="false" data-interval="3000">
            <div class="carousel-inner" id="carouselfirst">
                <div class="carousel-item active">
                    <img src="img/desk.png" class="img-fluid d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/desk2.png" class="img-fluid d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/desk3.png" class="img-fluid d-block w-100" alt="...">
                </div>
            </div>
            
        </div>
        </section>
<!-- SECOND SLIDER -->
   <section class="secondslide mt-2"></section>
        <div class="owl-carousel " id="owl1">
                        <div class="">
                        <img src="http://93.174.95.29/covers/205000/2161129b2212a5aa121cf893cc863306-d.jpg" class="item" alt="..." style="height:300px;">
                        </div>
                        <div class="">
                        <img src="img/desk2.png" class="item" alt="..." style="height:300px;">
                        </div>
                        <div class="">
                        <img src="img/desk3.png" class="item" alt="..." style="height:300px;">
                        </div>
                        <div class="">
                        <img src="img/desk2.png" class="item" alt="..." style="height:300px;">
                        </div>
                        <div class="">
                        <img src="img/desk3.png" class="item" alt="..." style="height:300px;">
                        </div>
                        <div class="">
                        <img src="img/desk2.png" class="item" alt="..." style="height:300px;">
                        </div>
            </div>
   
    <!-- Javascript -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
   <script src="js/owl.carousel.min.js"></script>
    <script>
    $(document).ready(function(){
  $("#owl1").owlCarousel({
    loop:true,
    autoplay:true,
    margin:10,
    dots:false,
    nav:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1
           
        },
        600:{
            items:2
            
        },
        1000:{
            items:4
        }
    }
  });
});


</script>

   
    </body> 
    <script>
  $(function(){
    let query
    $("#myform").submit(function(e){
          e.preventDefault();          
          var title=$("#title").val()
        var author=$("#author").val()
        var publisher=$("#publisher").val()          
          
          var andno=0;
          if(!(title==='')){
            
              query=`Title LIKE "% ${title} %"`
              andno=1
          }
          if(!(author==='')){
                if(andno==1)
                    query=`${query} AND Author LIKE "% ${author} %"`
                else{
                    query=`Author LIKE "% author %"`
                    andno=1
                }
                
          }
          if(!(publisher==='')){
                if(andno==1)
                    query=`${query} AND Publisher LIKE "% ${publisher} %"`
                else
                    query=`Publisher LIKE "% ${publisher} %"`
          }
          console.log(query)
          axios.get(`mainsearch.php?query=${query}`)
      .then(response=>{
          console.log(response)
      })
      })
      
     
      
  })
      
    </script>
    
</html>

