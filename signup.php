<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <title>Document</title>
</head>
<body>
  <nav class="navbar">
    <img src="orange.png" alt=""  class="logo1"  width="200px">    <a href="#" class="toggle-button">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </a>
    <div class="navbar-links">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="how.html">How It Works?</a></li>
        <li><a href="teacher.html">Becoming a teacher</a></li>
        <li><a href="#feature">Courses</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="contact.html">Contacts</a></li>


      </ul>
    </div>
  </nav>

    <!--home-->

    <section  id="hometeacher">
        <div  class="from1" >
            <h1>Apply Now</h1>
            <form class="row g-3"    method="post" >


              <div class="col-md-6">
                <label for="inputName" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" >
              </div>
                <div class="col-md-6" >
                  <label for="inputEmail4" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email">
                </div>
                <div class="col-md-6">
                  <label for="inputTest" class="form-label">Test results</label>
                  <input type="name" class="form-control" id="subject">
                </div>
                
                <div class="col-md-6">
                  <label for="inputPhone" class="form-label">Phone number</label>
                  <input type="text" class="form-control" id="phone" >
                </div>
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">City</label>
                  <input type="text" class="form-control" id="city">
                </div>
                <div class="col-md-4">
                  <label for="inputState" class="form-label">Select your course</label>
                  <select id="language" class="form-select">
                    <option selected>Courses</option>
                    <option>  English Courses</option>
                    <option>  French Courses</option>
                    <option>  Italian Courses</option>
                    
                  </select>
                </div>
                
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      Check me out
                    </label>
                  </div>
                </div>
                <div class="col-12">
                  <button type="submit" onclick="sendEmail()" id="btn btn-primary">Sign in</button>
                </div>
              </form>
        
    </div>
    </section>

    <section  id="feature">
      <h1>Our Language Courses</h1>
      

      <div class="lang">
          <div class="box">
          <img src="england.png"  alt="..."   width="300px">
          <div class="TEXT-COURSE">
          <h2>English</h2>
          <div class="LINE"></div>
              <p>199 DH/Mois</p>
            <button><a class="a" href="signup.html">Sign up</a></button>
            </div>
      </div>
      <div class="box">
          <img src="spain.png"  alt=""  width="300px">
        <div class="TEXT-COURSE">
          <h2>Spanish</h2>
          <div class="LINE"></div>
          <p>Coming soon</p></div>



</div>
          <div class="box">
              <img src="france.png"  alt=""  width="300px">
              <div class="TEXT-COURSE">
              <h2>French</h2>
              <div class="LINE"></div>

              <p>199 DH/Mois</p>
              <button><a class="a" href="signup.html">Sign up</a></button>

            </div>
      

      </div>

      <div class="box">
        <img src="italian-01.png"  alt=""  width="300px">
        <div class="TEXT-COURSE">
        <h2>italian</h2>
        <div class="LINE"></div>

        <p>249 DH/Mois</p>
        <button><a class="a" href="signup.html">Sign up</a></button>

      </div>
      
  </section>

    <footer>
        <div class="footer-courses">
           <h3>Courses</h3>
           <li>English Courses</li>
           <li>French Courses</li>
           <li>Spanish Courses</li>
           <li>Italian Courses</li>
        </div>
         <div class="footer-courses">
           <h3>Useful links</h3>
           <a   class="about" href="contact.html">About US</a>
        </div>
        <div class="footer-courses">
            <h3>Payment methods</h3>
            <i class="fab fa-cc-visa"></i>
            <i class="fab fa-paypal"></i>
            <i class="fab fa-cc-mastercard"></i>
         </div>
         <div class="footer-courses">
            <h3>About Us</h3>
           <p> Seeklight founded in 2021 in Morocco, offers online courses that are based on the practice
and communication of languages for all levels.</p>
          <a class="blue" href="contact.html">Contact</a>
            <a  class="blue"  href="#">Register</a>
         </div>
    </footer>
    <script src="https://kit.fontawesome.com/0fa5719a4e.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</script>
<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");
            var language  = $("#language");
            var city  = $("#city");
            var phone = $("#phone");
            var name  = $("#name");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body) && isNotEmpty(language)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       body: body.val(),
                       language: language.val(),
                       city:  city.val(),
                       phone:   phone.val(),
                       name:  name.val(),
                   }, success: function (response) {
                        if (response.status == "success")
                            alert('Email Has Been Sent!');
                        else {
                            alert('Please Try Again!');
                            console.log(response);
                        }
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>
 
</body>
</html>