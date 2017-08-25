
    <?php            
    session_start();
    $error='';
    if (isset($_POST['submit'])){
        if(empty($_POST['username']) || empty($_POST['password'])) {
            $error = "Cannot be blank";           
        }else{
            $username=$_POST['username'];
            $password=$_POST['password'];
            $connection = mysqli_connect("localhost", "root", "");
            $username = stripslashes($username);
            $password = stripslashes($password);
            $username = mysqli_real_escape_string($connection, $username);
            $password = mysqli_real_escape_string($connection, $password);
            $db = mysqli_select_db($connection, "company");
            $query = mysqli_query($connection, "select * from login where password='$password' AND username='$username'");
            $rows = mysqli_num_rows($query);
            if ($rows == 1){
                $_SESSION['login_user']=$username;
                header('Location: index.php');
            }else{
                $error = "Invalid Credentials";
               
            }
        
            mysqli_close($connection);
        }
    }
    
    
    
     ?>  
