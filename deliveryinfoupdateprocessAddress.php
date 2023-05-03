<?php
    session_start();
    if(isset($_SESSION['useremail']) && !empty($_SESSION['useremail'])){

        if(isset($_POST['cn']) && !empty($_POST['cn'])){
            
            $var1=$_POST['cn'];
            
            
            
            try{
                ///php-mysql 3 way. We will use PDO - PHP data object
                $dbcon = new PDO("mysql:host=localhost:3306;dbname=asclepious;","root","");
                $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $sqlquery="UPDATE customer SET Address='$var1' WHERE Email='$_SESSION[useremail]'";
                
                try{
                    $dbcon->exec($sqlquery);
                    ?>
                        <script>
                            window.location.assign('viewpersonaldetails.php');
                        </script>
                    <?php
                }
                catch(PDOException $ex){
                    ?>
                        <script>
                            window.location.assign('viewpersonaldetails.php');
                        </script>
                    <?php
                }
                
            }
            catch(PDOException $ex){
                ?>
                    <script>
                        window.location.assign('viewpersonaldetails.php');
                    </script>
                <?php
            }
        }
        else{
            ?>
                <script>
                    window.location.assign('viewpersonaldetails.php');
                </script>
            <?php
        }
    }
    else{
        ?>
            <script>
                window.location.assign('loginpage.php');
            </script>
        <?php
    }
?>