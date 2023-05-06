<div class="login-container">
            <?php if(!isset($_SESSION['user_data'])){ ?>

                <div class="box">
                    <h3>Login here</h3>
                   <div class="frm">
                   <form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>">
                            <span for="eamil" >Enter email </span>
                            <input name="email" required type="text" placeholder="email" id="email">
                            <input name="password" required type="password" placeholder="Pssword">
                        <button type="submit" name="submit">Log In</button>
                    </form>
                   </div>

                    <div class="error">
                    <?php 
                    if (isset($_POST['submit'])) {
                        $email = mysqli_real_escape_string($con,$_POST["email"]);
                        $password = mysqli_real_escape_string($con,$_POST["password"]);
                        $emailquery = "select * from user where email='$email'";
                        $query = mysqli_query($con,$emailquery);        

                        if( $result = mysqli_fetch_array($query)){
                            $db_pass = $result['password'];

                            if($db_pass === $password){
                            $_SESSION["user_data"] = $result;
                            if($_SESSION['user_data'][8] == 1){
                                header("location:http://localhost/coffee/admin.php");
                            }
                           else{
                            header("location:index.php");
                           }
                            }
                            else{
                                echo "You Enterd Wrong Password";
                            }
                        }
                        else{
                            echo "Email not Found Please Sign Up";
                        }

                    
                    
                    }
                ?>
                    </div>
                

                </div>

                

                <div class="sign-up log-out" onclick="sign_in()" id="signin">
                    <div class="icon">
                    <i class="fa-solid fa-user-plus"></i></div>
                    <div class="text" >
                    <a href="./signup.php" >New to Cafena ? Create an account</a>
                    </div>
            
                </div>
                    <script> login();
                    function login() {
                    let login_container = document.querySelector('.login-container');
                    login_container.classList.add('active');
                    }
                    </script>
                
                <?php } else{ ?>


                <div class="loged">
                    <div class="icon">
                        <i class="fa-regular fa-user"></i>
                    </div>
                    <div class="text">
                        
                       <h2><?php echo $_SESSION['user_data'][1];
                       echo " "; echo $_SESSION['user_data'][2];?> </h2>
                       </div>
                    <div class="log-out" onclick="log_out()" id="log-out">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <h2>Log Out</h2>
                    </div>
                </div>
                
            <?php } ?>
        </div>


        <script>

  function sign_in(){
    location.href ="./signup.php";
  }
function log_out(){
    location.href ="./components/logout.php";
}

 </script>