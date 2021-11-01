<?php

        $connect = mysqli_connect('localhost', '', '', '') or die("fail");


        $id=$_GET[id];
        $pw=$_GET[pw];
        $email=$_GET[email];

        $date = date('Y-m-d H:i:s');

        //入力された情報をDBにセーブ
        $query = "insert into member (id, pw, mail, date, permit) values ('$id', '$pw', '$email', '$date', 0)";


        $result = $connect->query($query);

        //(result = true) セーブしたら加入済み
        if($result) {
        ?>      <script>
                alert('加入済み.');
                location.replace("./login.php");
                </script>

<?php   }
        else{
?>              <script>

                        alert("fail");
                </script>
<?php   }

        mysqli_close($connect);
?>
