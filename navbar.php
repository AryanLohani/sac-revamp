<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      .navbar{
  font-size: 1.1rem;
}
.nav-link{
  padding-right: 20px !important;
  padding-left: 20px !important;
}
.navbar-brand img{
  height: 4.5rem;
  width: 11rem;
}
.nav-item:hover .nav-link{
  background-color: gray;
  border-radius:  2px;
}
.dropdown:hover .dropdown-menu {
  display: block;
  margin-top: 0;
}
.dropdown-item{
  text-align: center !important;
  padding-bottom: 20px !important;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 2px 15px 0px rgba(0, 0, 0, 0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
      </style>
  </head>
  <body>
  <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><img src="img/SACLogo.png"> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Events
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="SAM.php">Students Alumni Meet</a>
            <a class="dropdown-item" href="AAM.php">Alumni Meet</a>
            <a class="dropdown-item" href="homecoming.php">Homecoming</a>
            <a class="dropdown-item" href="phonathon.php">Phonathon</a>
            <a class="dropdown-item" href="leadershipsummit.php">Leadership Summit</a>
            <a class="dropdown-item" href="alumni_talks.php">Alumni Talks</a>
            <a class="dropdown-item" href="alvida.php">ALVIDA</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Initiatives
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="SAMP.php">SAMP</a>
            <a class="dropdown-item" href="sparc.php">SPARC</a>
            <a class="dropdown-item" href="myimprint.php">MYIMPRINT</a>
            <a class="dropdown-item" href="ACAP.php">ACAP</a>
            <a class="dropdown-item" href="https://studentsalumnicell-iitkgp.medium.com/">Alumni Blog</a>
            <a class="dropdown-item" href="affinity.php">Affinity Programme</a>
          </div>
        </li>
           <li class="nav-item dropdown">
             <a class="nav-link dropdown" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
               Publications
             </a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
               <a class="dropdown-item" href="yearbook.php">Yearbook</a>
               <a class="dropdown-item" href="YOY.php">YOY</a>
               <a class="dropdown-item" href="https://sac.iitkgp.ac.in/temposhout_final_6.pdf">Tempo Shout</a>
             </div>
           </li>
        <li class="nav-item">
          <a class="nav-link" href="team.php">The Team</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Alumni-Reg</a>
        </li>  -->

        <li class="nav-item">
          <a class="nav-link" href="http://www.alumni.iitkgp.ac.in/AlumniIITKGP/EmailReg">Alumni-Reg</a>
        </li>
         <li class="nav-item dropdown">
          <a class="nav-link dropdown" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Sponsors
          </a>
          <div class="dropdown-menu" style="padding-right: 50px !important;" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="sponsors.php">2020</a>
            <a class="dropdown-item" href="sponsors2019.php">2019</a>
            <a class="dropdown-item" href="sponsors2018.php">2018</a>
            <a class="dropdown-item" href="sponsors2017.php">2017</a>
            <a class="dropdown-item" href="sponsors2016.php">2016</a>
            <a class="dropdown-item" href="sponsors2015.php">2015</a>
            <a class="dropdown-item" href="sponsors2014.php">2014</a>
            <a class="dropdown-item" href="sponsors2013.php">2013</a>
            <a class="dropdown-item" href="sponsors2012.php">2012</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  </body>
</html>
