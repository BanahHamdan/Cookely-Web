

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cookely-recipes website</title>
    <link href="style/style.css" rel="stylesheet" type="text/css">
    <link href="style/signIn.css" rel="stylesheet" type="text/css">
    <link href="style/signUp.css" rel="stylesheet" type="text/css">
    <style>
        a:link{
            text-decoration: none;
        }
        @import url('https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap');


    </style>


</head>

<body>
<div class="header">
    <nav class="navC" role="navigation">
        <h1 class="mainTitle" align="left">COOKELY</h1>
        <ul class="nav-links"style="margin-top: -10px;margin-left: 0px;">
            <li><a href="">Recipes</a></li>
            <li><a href="">Communities</a></li>
            <li><a href="">Add</a></li>
            <li><a href="">About</a></li>

        </ul>
        <ul class="nav-linksSign">

            <!--            signIn-->
            <button class="orangeSinB" onclick="document.getElementById('id00').style.display='block'" style="width:auto; ">Sing In</button>

            <div id="id00" class="modalSignIn">
                <?php
                $isAmember=true;
                $passIsOkay=true;
                $isUserOkay= true;

                $nameErr = $emailErr="";

                if (isset($_POST['login'])) {



                    $db = new mysqli('localhost', 'root', '', 'cookelydata');

//                    $query = "select * from admin";
//                    $results = $db->query($query);
//                    for ($i = 0; $i < $results->num_rows; $i++) {
//                        $row = $results->fetch_array();
//                        if ($row[1] == $_POST['username'] && $row[2] == $_POST['Password']) {
//                            setcookie('admin-email', $_POST['username']);
//                            header("location: admin.html");
//                            $isAmember=true;
//                            $_SESSION['member']=1;
//                        }
//                    }

//                    if($isAmember=false)
                    $qryStr = "select * from user";
                    $res = $db->query($qryStr);
                    for ($i = 0; $i < $res->num_rows; $i++) {
                        $row = $res->fetch_array();
                        if($row[1]== $_POST['username']&& $row[2]==$_POST['password']){

                           header( 'location:communities.html');


                        }else?>


                            <div style="font-size: 15px"> <?php echo "incorrect password or/and email"?></div>
                <?php

                    }
                    $db->close();

                }
                ?>
                <!--                add a php file-->
                <form style="width: 40%; height: 70%" class="modal-contentSignIn animateSignIn"  method="post">
                    <div class="imgcontainerSignIn">
                        <span onclick="document.getElementById('id00').style.display='none'" class="closeSignIn" title="Close Modal">&times;</span>
                        <img src="gif/signInBackG.png" alt="Avatar" class="avatarSignIn">
                    </div>

                    <div class="containerSignIn">
                        <label for="user-email" style="color: #253B41"><b>Email</b></label>
                        <input type="text" placeholder="Enter Username" name="username" required>

                        <label for="password" style="color: #253B41"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="password" required>

                        <button type="submit" style="color: #253B41;border: solid #253B41; background-color: white; border-radius: 25px; padding: 7px; padding-left: 15px; padding-right: 15px" name="login" value="login54087"> <?php if ($isAmember==false){

                                echo "<p class='wrongLog'><i class='fas fa-exclamation-circle '></i>&nbsp;Wrong username and/or password.</p>";}?>Sign In</button>
                        <label>
                            &nbsp;&nbsp;  <input style="color: #253B41" type="checkbox" checked="checked" name="remember"> Remember me
                        </label>
                    </div>

                    <div class="containerSignIn" style="background-color:#f1f1f1; ">
                        <button type="button" style="background-color:#253B41;color: white; border: solid white; border-radius: 25px" onclick="document.getElementById('id00').style.display='none'" class="cancelbtnSignIn">Cancel</button>
                        <span class="pswSignIn" style="color: #253B41">Forgot <a href="#" style="color: #253B41">password?</a></span>
                    </div>
                </form>
            </div>

            <script>
                // Get the modal
                var modal = document.getElementById('id00');

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
            </script>
            <!--            signInEnd-->

            <!--            signUp-->

            <button class="orangeSupB" onclick="document.getElementById('id01').style.display='block'" style="border: #F7AF27 solid; width:auto;padding-left: 20px; padding-right: 20px">Sign Up</button>

            <div style="width: 50%">
                <div id="id01" class="modal" style="background-color: rgba(0,0,0,0.4);" >
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <form style="width: 50%; height: 620px" class="modal-content" action="/action_page.php">
                        <div class="container">
                            <h1 style="font-size: 25px; font-family: thirdFont; font-weight: bolder">Sign Up</h1><br>
                            <p>Please fill in this form to create an account.</p>
                            <br>
                            <hr>
                            <label for="userName"><b>Full Name</b></label>
                            <input type="text" placeholder="Enter Email" name="email" required>

                            <label for="email"><b>Email</b></label>
                            <input type="text" placeholder="Enter Email" name="email" required>

                            <label for="psw"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="psw" required>

                            <label for="psw-repeat"><b>Repeat Password</b></label>
                            <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

                            <label>
                                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                            </label>

                            <p>By creating an account you agree to our <a href="Terms.html" style="color:dodgerblue">Terms & Privacy</a>.</p>
<br>
                            <div class="clearfix">
                                <button style="background-color:#253B41;color: white; border: solid #253B41; border-radius: 25px;padding: 7px; padding-left: 15px; padding-right: 15px" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

                                <button style="color: #253B41;border: solid #253B41; border-radius: 25px; padding: 7px; padding-left: 15px; padding-right: 15px" type="submit" class="signupbtn">Sign Up</button>
                            </div>
                        </div>
                    </form>
                </div>

                <script>
                    // Get the modal
                    var modal = document.getElementById('id01');

                    // When the user clicks anywhere outside of the modal, close it
                    window.onclick = function(event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    }
                </script>
            </div>
            <!--            signUpEnd-->
<!--            <li><a id="s" style="color: #253B41" href="http://localhost/web2021c/Cookely/signUp.html"target="_blank">Sign In</a></li>-->
<!--            <li class="btn"><a target="_blank" href="http://localhost/web2021c/Cookely/signUp.html">Sign Up</a></li>-->
<!--           <li class="btn"><form action="action_page.php" style="border:1px solid #ccc">-->
<!--                <div class="container">-->
<!--                    <h1>Sign Up</h1>-->
<!--                    <p>Please fill in this form to create an account.</p>-->
<!--            <hr>-->

<!--                    <label for="email"><b>Email</b></label>-->
<!--                    <input type="text" placeholder="Enter Email" name="email" required>-->

<!--                    <label for="psw"><b>Password</b></label>-->
<!--                    <input type="password" placeholder="Enter Password" name="psw" required>-->

<!--                    <label for="psw-repeat"><b>Repeat Password</b></label>-->
<!--                    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>-->

<!--                    <label>-->
<!--                        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me-->
<!--                    </label>-->

<!--                    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>-->

<!--                    <div class="clearfix">-->
<!--                        <button type="button" class="cancelbtn">Cancel</button>-->
<!--                        <button type="submit" class="signupbtn">Sign Up</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </form>-->
<!--           </li>-->
        </ul>
    </nav>
</div>

</div>
<div>
    <!--<p style=" width: 700px">-->
    <img src="gif/food-gif1.gif" align="right" class="mainGif">

    <div>
        <p align="left" class="mainQuote">
            "A recipe is a<br>
            &nbsp;story that ends<br>
            &nbsp; with a good<br>
            &nbsp;&nbsp;&nbsp;meal.."

        </p>
    </div>
    <div style="padding-bottom: 170px">
        <p class="SignUp"><a href="" style="color: white">&nbsp;Sign Up</a></p>
    </div>
    <!--</p>-->
</div>

<div style="background-color: #FFFFF0; padding-top: 1px; padding-bottom: 1px">
    <p class="triangle" align="center">Save all your recipes in one place...</p>
    <p class="triangle2" align="center">Discover new dishes you’ll love<br><br>
        <!--        Make your own recipes and share it with us<br>-->
        Recipe communities on Cookely help you share and
        discover the recipes<br>
        that fit your eating preferences, restrictions, needs, and more.
    </p>
</div>

<div style=" margin-left: 0; margin-top: 0px" class="pics" align="center">


    <img src="gif/rice.jpg" width="250px" height="360px">
    <img src="gif/whiteRich.png" width="250px" height="360px" >
    <img src="gif/passtaaa.jpg" width="250px" height="360px" >
    <img src="gif/dessert.jpg"  width="250px" height="360px">

</div>

<div style="background-color: #FFFFF0 ; padding-bottom: 350px; padding-top: 10px">

    <img src="gif/recipess.png" class="recipe" align="right" width="650px" height="420px" style="image-resolution: 300dpi;
margin-right: 70px;border:3px solid #253B41; border-radius: 10px ">
    <div>
        <p class="paraRec" align="left">

            <b style="margin-left: 75px;  font-family: fifthFont;font-size: 35px; font-weight: bolder;color: #253B41;">
              <br>
                <br>
                <br>
                <br>
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Special Recipes...</b><br><br>
        <p style="font-size: 20px; margin-left: 100px; margin-bottom: 40px;color: #595959; font-family: thirdFont;font-weight: bold">
            Try different traditional meals from various<br>
            countries and taste the
            happiness in every bite.<br>

        </p>
        </p>
    </div>
</div>

<div style="margin-bottom: 300px;">
    <img src="gif/communities.png" class="recipe" align="left" width="650px" height="420px" style="margin-left: 70px;margin-top: 200px
     ;border:3px solid #253B41; border-radius: 10px">
    <div>
        <p class="paraRec" align="left">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>

            <b style="margin-left: 80px; color: #253B41;font-family: fifthFont;font-weight: bolder; font-size: 35px"> <br><br><br><br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Unique Communities...</b><br><br>
        <p style="font-size: 20px; margin-right: 10px; margin-bottom: 40px; color: #595959 ; font-family: thirdFont;font-weight: bold">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Join our special communities where you can  <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;find the food style that you prefer..<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enjoy learning new recipes <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;form people who share the same taste as you <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Find new recommendation every day that <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;will encourage you to continue with your cooking <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;life style  by creating new, not boring delicious recipes. <br>
        </p>
        </p>
    </div>
</div>

<div style="padding-bottom: 250px; background-color: #FFFFF0 ; padding-top: 10px">
    <img src="gif/AddSc.png" class="recipe" align="right" width="650px" height="420px" style="margin-right: 70px;
border:3px solid #253B41; border-radius: 10px">
    <div>
        <p class="paraRec" align="left">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
            <b style="margin-left: 75px; color: #253B41; font-family: fifthFont;font-weight: bolder; font-size: 35px"> <br><br><br><br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Add your own recipes...</b><br><br>
        <p style="font-size: 20px; margin-left: 140px; margin-bottom: 40px;color: #595959">
            Beside the new recipes you will learn <br>
            we are interested to see your wonderful ideas <br>
            so you can also share with people your own recipes<br>
            just click on ADD button above  and <br>
           let the world see your art <br>
            Who knows you may have one of the highest<br>
        weekly reviews.<br>
        </p>
        </p>
    </div>
</div>
<!--<p style="color: #253B41; font-family:thirdFont; font-weight: bold; margin-left: 50px;font-size: 30px; ">About</p>-->
<!--<div style="width: 100%; height: 300px; border-radius: 30px;">-->
<!--</div>-->

<footer>
    <div class="footer">
        <div class="footer-content">
            <div class="footer-section about">
                <h1 class="logo-text">COOKELY</h1>
                <br>
                <p style="color: ghostwhite">
                    Cookely is the ultimate cooking app for recipe<br>saving, meal planning, and recipe sharing.<br>
                    With Cookely, you can save, plan, and cook the recipes<br> you love, while also discovering new recipes
                    through<br>Cookely Communities.
                </p>
                <br>
                <br>

            </div>

            <div class="footer-section links">
                <br>
                <br>
                <h2 style="font-family: 'Montserrat', sans-serif;">Quick Links</h2>
                <br>
                <div class="linkColor" style="margin-left: 40px; text-decoration: none; ">
                    <ul>

                        <a href="Terms.html" target="_blank">
                            <li style="font-family: 'Montserrat', sans-serif;">Terms and Conditions</li>
                        </a>
                    </ul>
                </div>
            </div>
            <div class="footer-section contact-form">
                <br>
                <br>
                <h2 style="font-family: 'Montserrat', sans-serif;">Contact Us</h2>
                <br>

                <div class="contact">

                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                    </svg>
                    <span style="font-family: 'Montserrat', sans-serif;">&nbsp; +970-595257483</span>

                    <br>
                    <br>

                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                    </svg>
                    <span style="font-family: 'Montserrat', sans-serif;">&nbsp; Info@cookely.com </span>

                    <br>
                    <br>

                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                    </svg>
                    <span style="font-family: 'Montserrat', sans-serif;">&nbsp;&nbsp; Cookely </span>

                    <br>
                    <br>

                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                    </svg>
                    <span style="font-family: 'Montserrat', sans-serif;">&nbsp;&nbsp;&nbsp; Cookely2021 </span>

                </div>

            </div>
        </div>
        <div class="footer-bottom">
            &copy; Cookely.com | Designed by Banah & Masa
        </div>
    </div>
</footer>

</body>
</html>