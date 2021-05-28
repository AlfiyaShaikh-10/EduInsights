<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <style>
    .dropbtn {
      color: white;
      padding-top: 17px;
      padding-left:2px;
      padding-right:2px;
      border: none;
    }
    
    .dropdown {
      position: relative;
      display: inline-block;
    }
    
    .dropdown-content {
      display: none;
      position: absolute;
      background-color:#18db70 ;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }
    
    .dropdown-content a {
      color: rgb(13, 214, 120)
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }
    
    .dropdown-content a:hover {background-color: #18db70;}
    
    .dropdown:hover .dropdown-content {display: block;}
    
    .dropdown:hover .dropbtn {background-color: #18db70;}
    </style>
    

  <!---bootstrap header-->
    <!--quizes hasder-->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />

    <link
      href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
      rel="stylesheet"
    />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Add the slick-theme.css if you want default styling -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <!-- Add the slick-theme.css if you want default styling -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="js/index.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/font-awesome.min.css">
  <link id="theme" rel="stylesheet" href="assets/css/dark-theme.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/home.css">
  <title>EduInsights</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      
      <a class="navbar-brand" href="#">EduInsights &nbsp;  &nbsp;Hello,  <?php echo $_SESSION['name']; ?></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Home.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="courses.html">Courses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="scholarship.html">Scholarship</a>
          </li>
          
          <li class="nav-item">
            <div class="dropdown">
              <button class="dropbtn">Social Awareness</button>
              <div class="dropdown-content">
                <a href="achivements.html">Achivements</a>
                <a href="acceptance.html">Acceptance</a>
                <a href="donndont.html">dos and Donts</a>
              </div>
            </div>
            
          </li>
          <li class="nav-item">
            <a class="nav-link" href="travell.html">Travelling</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="askme.html"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">AboutUs</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              <img src="assets/images/profile.jfif" class="rounded-circle profile-img">
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="logout.php">Sign Out</a></li>
            </ul>
          </li>

        </ul>

      </div>

    </div>
  </nav>


   <img src="assets/courses/Images/18.jpg" width="2024" > 


    <div class="second-div-1">
    <div class="second-div-2">
      <div class="second-div-3">
        <div class="second-div-4" style="padding-top: 10px">
          
          <div class="second-div-5"></div>
          
          <div class="devsite-playlist-summary">
            </div>
        </div>
      </div>
    </div>
  </div>
  <div>
    <br />
    <br />
  </div>



 

  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="group">
          <div class="upper-dvision">
            <div class="image">
              <img
                src="assets/images/1.jfif" style="border-radius: 90%;"
                alt="scholarship"
                class="center"/>
            </div>
          </div>
          <div class="lower-division">
            <div class="lower-text">
              <h3>
                <a href="#">Minority<br />Scholarship</a>
              </h3>
            </div>
            <div></div>
            <div></div>
            <br />
   
            <div class="date-time-container"></div>
            <p class="textdiv">
             
            </p>
            <div class="lower-explore">>
              <br /><br /><br />
              
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="group">
          <div class="upper-dvision">
            <div class="image">
              <img
                src="assets/images/2.jfif" style="border-radius: 90%;"
                alt="Scholarship"
                class="center"
              />
            </div>
          </div>
          <div class="lower-division">
            <div class="lower-text">
              <h3>
                <a href="#">Social<br />Awareness</a>
              </h3>
            </div>
            <div></div>
            <div></div>
            <br />
            <div class="date-time-container"></div>
            <p class="textdiv">
             
            </p>
            <div class="lower-explore">>
              <br /><br /><br />
              
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="group">
          <div class="upper-dvision">
            <div class="image">
              <img
                src="assets/images/4.jfif" style="border-radius: 90%;"
                alt="scholarship"
                class="center"
              />
            </div>
          </div>
          <div class="lower-division">
            <div class="lower-text">
              <h3>
                <a href="#">Career<br />Guidance</a>
              </h3>
            </div>
            <div></div>
            <div></div>
            <br />
            <div class="date-time-container"></div>
            <p class="textdiv">
              
            </p>
            <div class="lower-explore">>
              <br /><br /><br />
              
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="group">
          <div class="upper-dvision">
            <div class="image">
              <img
                src="assets/courses/Images/19.jpg" style="border-radius: 90%;"
                alt="Scholarship"
                class="center"
              />
            </div>
          </div>
          <div class="lower-division">
            <div class="lower-text">
              <h3>
                <a href="#">Travelling<br />Facilities</a>

              </h3>
            </div>
            <div></div>
            <div></div>
            <br />
            <div class="date-time-container"></div>
            
            <div class="lower-explore">>
              <br /><br /><br />
          





            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br /><br /><br />

  <div>
    <br />
  </div>
  <div>
    <div class="container">
      <div class="row">
        <div class="panel panel-default">
          <div class="panel-body" style="text-align: center">
            <a href="#">Let's start</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap md:text-left text-center -mb-10 -mx-4">
        <div class="lg:w-1/6 md:w-1/2 w-full px-4">
          <h2
            class="title-font font-medium text-gray-100 tracking-widest text-sm mb-3"
          >
            CATEGORIES
          </h2>
          
        </div>
        <div class="lg:w-1/6 md:w-1/2 w-full px-4">
          <h2
            class="title-font font-medium text-gray-100 tracking-widest text-sm mb-3"
          >
            CATEGORIES
          </h2>
          
        </div>
        <div class="lg:w-1/6 md:w-1/2 w-full px-4">
          <h2
            class="title-font font-medium text-gray-100 tracking-widest text-sm mb-3"
          >
            CATEGORIES
          </h2>
          
        </div>
        <div class="lg:w-1/6 md:w-1/2 w-full px-4">
          <h2
            class="title-font font-medium text-gray-100 tracking-widest text-sm mb-3"
          >
            CATEGORIES
          </h2>
          
        </div>
        <div class="lg:w-1/6 md:w-1/2 w-full px-4">
          <h2
            class="title-font font-medium text-gray-100 tracking-widest text-sm mb-3"
          >
            CATEGORIES
          </h2>
          
        </div>
        <div class="lg:w-1/6 md:w-1/2 w-full px-4">
          <h2
            class="title-font font-medium text-gray-100 tracking-widest text-sm mb-3"
          >
            CATEGORIES
          </h2>
          <nav class="list-none mb-10">
            
          </nav>
        </div>
      </div>
    </div>
    <div class="border-t border-gray-200">
      <div class="container px-5 py-8 flex flex-wrap mx-auto items-center">
        <div
          class="flex md:flex-nowrap flex-wrap justify-center items-end md:justify-start"
        >
          
          
          
        </div>
        <span
          class="inline-flex lg:ml-auto lg:mt-0 mt-6 w-full justify-center md:justify-start md:w-auto"
        >
          <a class="text-gray-500">
            
          </a>
          <a class="ml-3 text-gray-500">
            
          </a>
          <a class="ml-3 text-gray-500">
            
          </a>
          <a class="ml-3 text-gray-500">
            
              <path
                stroke="none"
                d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"
              ></path>
              <circle cx="4" cy="4" r="2" stroke="none"></circle>
            </svg>
          </a>
        </span>
      </div>
    </div>
    <div class="bg-red-800">
      <div
        class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row"
      >
        <p class="text-gray-200 text-sm text-center sm:text-left">
          © 2021 eduinsights
          <a
            href="#"
            class="text-White-100 ml-1"
            target="_blank"
            rel="noopener noreferrer"
            >@Progammer</a
          >
        </p>
        <span
          class="sm:ml-auto sm:mt-0 mt-2 sm:w-auto w-full sm:text-left text-center text-gray-200 text-sm"
          >Educational Insights</span
        >
      </div>
    </div>
  </footer>
</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>

