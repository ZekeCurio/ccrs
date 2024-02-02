<?php include 'header.php';
include 'conn.php';

?>
<style>
    body {
        background: linear-gradient(rgb(182, 50, 182), rgb(15, 128, 143), rgb(8, 100, 44));
        background-repeat: no-repeat;
        background-size: 100% 100%;
        background-attachment: fixed;
       color: white;
    }

    .main {
        height: 100%;
        width: 100%;
        display: flex;
        justify-content: center;
    }

    .right {
        height: 90%;
        width: 90%;
        font-family: Tahoma;
        padding: 40px;

    }

    .right p {
        color: black;
    }

    .profile {
        display: flex;
        gap: 15%;

    }

    .img {
        height: 100px;
        width: 100px;
        border-radius: 50%;
        overflow: hidden;
        margin-top: 50px;
        margin-left: 15%;

    }

    h4 {
        text-align: center;
    }

    .left {
        height: 90%;
        width: 60%;
        font-family: Tahoma;
        padding: 40px;
        font-size: 20px;
    }

    .left p {
        margin-top: 50px;
    }
</style>

<body>
    <div class="main">
        <div class="left">
            <h4>ABOUT US</h4>
            <hr>
            <p>"The College Course Registration System helps the students to gather information
                 about a particular course and then they can easily register themeselves in a particular course. 
                 The purpose of our system is to allow the student to register in a particular course. 
                 The student can login into system by using their username and also you can check the details ofcourse. "</p>
        </div>
        <div class="right">
            <h4 style="margin-right:15%;"> TEAM  </h4>
            <hr>
            <p></p>
            <center>
                <div class="profile">
                    <div>
                        <div class="img">
                            <img src="img/pic1.jpg" width="100%" height="100%">
                        </div>

                        <h5>Zeke C. Curio </h5><br>


                    </div>
                    <div>
                        <div class="img">
                            <img src="img/pic2.jpg" width="100%" height="100%">
                        </div>

                        <h5>Jinny A Cabrillos </h5><br>

                    </div>
                    <div>
                        <div class="img">
                            <img src="img/pic3.jpg" width="100%" height="100%">
                        </div>

                        <h5>Heinz C. Esmille </h5><br>

                    </div>
                </div>
                <p style="margin-right:20%; margin-top:5%;">Email : ccrs@gmail.com <br>
                    Contact Number : 09704653575
                </p> 
            </center>

        </div>
    </div>
    <center>
        <a href="index.php"> <button class="btn btn-primary"><b>Back</b> </button></a>
    </center>

</body>