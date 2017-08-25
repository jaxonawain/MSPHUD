<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<Html>
    <HEAD>
        <title>Decypher HUD | Login</title>
        <link rel="stylesheet" type="text/css" href="login.css" />
    </head>
    <body>
             
        <div id="body">
            <form action="testing.php" method="POST">   
                <p class="rowtext">
                    Username:
                    <input type="text" placeholder="Enter Username" name="username" class="textboxes" >
                </p>
                <p class="rowtext">Password:                  
                    <input type="text" placeholder="Enter Password" name="password" class="textboxes" > 
                </p>
                <input type="submit"class="textboxes">                                        
                <p class="rememberme">
                    <input type="checkbox" checked="checked">
                    Remember me 
                </p>               
            </form>            
        </div>
                                    
    <?php  


            
            function checkExistAndAuthenticate(){                
                $xml = simplexml_load_file('login.xml') or die("Error: Cannot create object"); 
                $username = $_REQUEST['username'];
                $password = $_REQUEST['password'];
                $dbUsername = $xml->role->administrator;
                $dbPassword = $xml->passwords->administrator;
                if($username == $dbUsername and $password == $dbPassword){
                    header("Location: index.html");
                }else{
                    echo 'Invalid Username/Password. Please try again';
                }
                
            }
            checkExistAndAuthenticate();
            
            
            
            
            
            


    ?>  

    </body>
</Html>






