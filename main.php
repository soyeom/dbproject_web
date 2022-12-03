<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>MAIN</title>
        <link href="css/main.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <table>
            <tr>
                <td>
                    <a href="main.php">
                        <img src="img/logo.png" id="logo" href="#">
                    </a>
                </td>
                <td>
                    <ul class="menu">
                        <li>
                            <a href="main.php" id="main">Main</a>
                        </li>
                        <li>
                            <a href="recommend.php" id="recommend">Recommend</a>
                        </li>
                    </ul>
                </td>
                <?php
                    include 'authorize.php';
                    
                    if($login){
                        echo("<td><div class='button'>");
                        echo("<div class='eff'></div>
                        <a href='logout.php'>Logout</a>");
                        echo("</div></td>");
                    }
                    else{
                        echo("<td><div class='button'>");
                        echo("<div class='eff'></div>
                        <a href='login.html'>Login</a>");
                        echo("</div></td>");
                    }
                ?>
                <td>
                    <div class="button">
                        <div class="eff"></div>
                        <a href="signup.html">Sign Up</a>
                    </div>
                </td>
            </tr>
        </table>
    </body>
</html>