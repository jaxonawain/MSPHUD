<?php
    require_once 'loginscript.php';

    if(isset($_SESSION['login_user'])){
        header("location: index.php");
    }
?>
<Html>
    <HEAD>
        <title>Decypher HUD | Login</title>
        <link rel="stylesheet" type="text/css" href="login.css" />
    </head>
    <body>             
        <div id="body">
            <form action="" method="POST">   
                <p class="rowtext">Username:</p>                                        
                <input type="text" placeholder="Enter Username" name="username" class="textboxes" required>
                
                <p class="rowtext">Password:</p>
                <input type="password" placeholder="Enter Password" name="password" class="textboxes" required> 
                
                <input name="submit" type="submit" class="textboxes">                                        
                <p class="rememberme">
                    <input type="checkbox" checked="checked">
                    Remember me 
                </p>    
                <span><?php echo $error; ?></span>
            </form>            
        </div>
                                    


    </body>
</Html>






