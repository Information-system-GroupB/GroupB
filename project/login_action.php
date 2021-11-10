<?php

        session_start();

        $connect = mysqli_connect('localhost', 'root', '', 'account_db') or die("connection fail");

        //入力された idと password
        $id=$_GET['id'];
        $pw=$_GET['pw'];

        //一致するか検査
        $query = "select * from member where id='$id'";
        $result = $connect->query($query);


        //IDがあればPW検査
        if(mysqli_num_rows($result)==1) {

                $row=mysqli_fetch_assoc($result);

                //合ってるとSession生成
                if($row['pw']==$pw){
                        $_SESSION['userid']=$id;
                        if(isset($_SESSION['userid'])){
                        ?>      <script>
                                        alert("loginされました。");
                                        location.replace("./index.php");
                                </script>
<?php
                        }
                        else{
                                echo "session fail";
                        }
                }

                else {
        ?>              <script>
                                alert("IDもしくはPWが間違っています。");
                                history.back();
                        </script>
        <?php
                }

        }

                else{
?>              <script>
                        alert("IDもしくはPWが間違っています。");
                        history.back();
                </script>
<?php
        }


?>
