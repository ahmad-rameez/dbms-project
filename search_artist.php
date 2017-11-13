<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="art-gallery" content="project">
    <meta name="shalini" content="cse">
    <link rel="icon" href="../../favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
    <link rel="stylesheet" href="css/demo.css">

	  <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">ART Gallery</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">Home</a></li>

            <li><a href="#" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Art <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  <li><a href="art.html">Painting</a></li>
                  <li><a href="sculpture.html">Sculpture</a></li>

              </ul>
            </li>
            <li><a href="insertDetails.html">Insert</a></li>
            <li><a href="deleteDetails.html">Delete</a></li>
            <li><a href="contact.html">Contact Us</a></li>
          </ul>
          <div class="right-navi">
            <button type="button" class="btn btn-default btn-xsm shalu-search"><span class="glyphicon glyphicon-search" aria-hidden="true"><a href="searchDetails.html"> Search   </a></span></button>
          </div>
        </div><!--/.nav-collapse -->

      </div>
    </nav>

  <table>
    <thead>
        <tr>
            <td>NAME</td>
            <td>AGE</td>
            <td>GENDER</td>
            <td>PHONE</td>
            <td>EMAIL</td>
        </tr>
    </thead>
  <tbody>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = '';
    $conn = new mysqli($servername, $username, $password, 'mydb1');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


        $artist_names = $_POST['namesearch'];
        $qry1="SELECT * FROM `artist_details` WHERE artist_name= '$artist_names' ";

        $results =mysqli_query($conn,$qry1) or die("bad query");

        while($row = mysqli_fetch_array($results)) {
      ?>
            <tr>
                <td><?php echo $row['artist_name']?></td>
                <td><?php echo $row['artist_age']?></td>
                <td><?php echo $row['artist_gender']?></td>
                <td><?php echo $row['artist_phone']?></td>
                <td><?php echo $row['artist_email']?></td>
            </tr>

        <?php
        }
       ?>
        </tbody>
    </table>




  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>


    <footer class="footer-distributed">

			<div class="footer-left">

				<h3>ART<span>MUSEUM</span></h3>

				<p class="footer-links">
					<a href="#">Home</a>
					·
					<a href="#">Blog</a>
					·
					<a href="#">Pricing</a>
					·
					<a href="#">About</a>
					·
					<a href="#">Faq</a>
					·
					<a href="#">Contact</a>
				</p>

				<p class="footer-company-name">art gallery &copy; 2017</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>21 Revolution Street</span> bangalore, India</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+91 555 123456</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">artgallery@company.com</a></p>
				</div>

			</div>




			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					This is the dbms project of art gallery
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
