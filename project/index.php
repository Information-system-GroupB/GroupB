<?php
                $connect = mysqli_connect('localhost', 'root', '', 'keijiban_db') or die ("connect fail");
                $query ="select * from board order by number desc";
                $result = $connect->query($query);
                $total = mysqli_num_rows($result);

                session_start();

                if(isset($_SESSION['userid'])) {
                        echo $_SESSION['userid'];?>様、　おはようございます。
                        <br/>
        <?php
                }
                else {
        ?>              <button onclick="location.href='./login.php'">login</button>
                        <br />
        <?php   }
        ?>
