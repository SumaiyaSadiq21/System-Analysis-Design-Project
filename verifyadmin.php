<?php
    

    if(isset($_POST['aemail']) && isset($_POST['apass']) 
       && !empty($_POST['aemail']) && !empty($_POST['apass'])){
       
        
        $var1=$_POST['aemail'];
        $var2=$_POST['apass'];
        
        try{
       
            $dbcon = new PDO("mysql:host=localhost:3306;dbname=asclepious;","root","");
            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sqlquery="SELECT Email FROM admin WHERE Email='$var1' and Password='$var2'";
            
            try{
                $returnval=$dbcon->query($sqlquery);
                if($returnval->rowCount()==1){
                    
                    session_start();
                    
                    $_SESSION['useremail']=$var1;
                    ?>
                        <script>
                            window.location.assign('homepageadmin.php');
                        </script>
                    <?php
                }
                else{
                   
                    ?>
                        <script>
                            window.location.assign('admin.php');
                        </script>
                    <?php
                }
            }
            catch(PDOException $ex){
                ?>
                    <script>
                        window.location.assign('admin.php');
                    </script>
                <?php
            }
        }
        catch(PDOException $ex){
            ?>
                <script>
                    window.location.assign('admin.php');
                </script>
            <?php
        }
        
    }
    else{
        ?>
            <script>
                window.location.assign('firstpage.php');
            </script>
        <?php
    }
?>