<?php include 'header.php';
include 'conn.php';
if (!isset($_SESSION['logged_in'])) {
    header("location: login.php");
    ob_end_flush();
}
?>
 

<?php
if(isset($_GET['view'])){ ?>

<?php
}else{ ?>

    <div class="row justify-content-center">
        <div class="col-md-5 shadow mt-5 p-3">
            <?php if (isset($_GET['msg'])) { ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>
                        <?php echo $_GET['msg'] ?>
                    </strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>

            <?php
            if (isset($_GET['edit'])) {

                $id = $_GET['id'];
                $selectData = $conn->prepare("SELECT * FROM  registration WHERE id = ?");
                $selectData->execute([$id]);

                foreach ($selectData as $data) { ?>
                    <form action="process.php" method="post">
                        <div class="d-flex mt-3">
                            <input type="hidden" name="user_id" value="<?= $data['id'] ?>">
                            <div class="mt-1 ms-5 me-5">
                                <label for="lname">Lastname</label>
                                <input type="text" class="form-control " id="lname" name="lastname"  value="<?= $data['lname'] ?>"> 
                            </div>
                            <div class="mt-1 ms-5 me-5">
                                <label for="fname ">Firstname</label>
                                <input type="text" class="form-control" id="fname" name="firstname"  value="<?= $data['fname'] ?>">
                            </div>
                            <div class="mt-1 ms-5 me-5">
                                <label for="mname ">Middlename</label>
                                <input type="text" class="form-control" id="mname" name="middlename"  value="<?= $data['mname'] ?>">
                            </div>
                        </div>
                        <div class="ms-5 me-5">
                            <label for="contact">Email</label>
                            <input type="text" class="form-control" id="contact" name="contact"  value="<?= $data['contact'] ?>">
                        </div>
                        <div class="ms-5 me-5">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address"  value="<?= $data['address'] ?>">
                        </div>
                        <div class="ms-5 me-5">
                        <label for="Date">Date of Birth</label>
                        <input type="date" id="date" name="date" class="form-control" value="<?= $data['date'] ?>">
                    </div>
                    <div class="input-group mb-3 ms-5">
                <label for="course">Course</label><br>
                <select name="course" id="course" value="<?= $data['course'] ?>">
                    <option value="BSIT">BSIT</option>
                    <option value="BSED">BS EDUCATION</option>
                    <option value="BSAS">BS ARTS AND SCIENCES</option>
                    <option value="BSCCJE">BS COLLEGE OF CRIMINAL JUSTICE OF EDUCATION</option>
                    <option value="BSAB">BS AB</option>
                    <option value="BSST">BS SUGARTECH</option>
                    <option value="BSF">BS FORESTRY</option>
                    <option value="BS ENGENEERING">BS ENGINEERING</option>
                    <option value="BS TOURISM">BS TOURISM</option>
                    <option value="BS FORESTRY">BS FORESTRY</option>
                </select>
            </div>
            <div class="input-group mb-3 ms-5">
                <label for="level">Year Level</label><br>
                <select name="level" id="level" value="<?= $data['level'] ?>">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
                        <center>
                         <button class="btn btn-success" type="submit" name="editData"
                          style="background-color: bg-info text-dark bg-opacity-25;">Update Registration</button>
                        </center>

            </form>
          

                <?php }
     } else { ?>
                <form action="process.php" method="post">
                    <div class="d-flex mt-3">
                        <input type="hidden" name="user_id" value="<?= $_SESSION['u_id'] ?>">
                        <div class="mt-1 ms-5 me-5">
                        <label for="lname">Lastname</label>
                                <input type="text" class="form-control " id="lname" name="lastname" >
                            </div>
                            <div class="mt-1 ms-5 me-5">
                                <label for="fname ">Firstname</label>
                                <input type="text" class="form-control" id="fname" name="firstname" >
                            </div>
                            <div class="mt-1 ms-5 me-5">
                                <label for="mname ">Middlename</label>
                                <input type="text" class="form-control" id="mname" name="middlename" >
                            </div>
                        </div>
                        <div class="ms-5 me-5">
                            <label for="contact">Email</label>
                            <input type="text" class="form-control" id="contact" name="contact" >
                        </div>
                        <div class="ms-5 me-5">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" >
                        </div>
                        <div class="ms-5 me-5">
                        <label for="Date">Date of Birth</label>
                        <input type="date" id="date" name="date" class="form-control">
                    </div>
                    <div class="input-group mb-3 ms-5">
                <label for="course">Course</label><br>
                <select name="course" id="course">
                <option value=""></option>
                    <option value="BSIT">BSIT</option>
                    <option value="BSED">BS EDUCATION</option>
                    <option value="BSAS">BS ARTS AND SCIENCES</option>
                    <option value="BSCCJE">BS COLLEGE OF CRIMINAL JUSTICE OF EDUCATION</option>
                    <option value="BSAB">BS AB</option>
                    <option value="BSST">BS SUGARTECH</option>
                    <option value="BSF">BS FORESTRY</option>
                    <option value="BS ENGENEERING">BS ENGINEERING</option>
                    <option value="BS TOURISM">BS TOURISM</option>
                    <option value="BS FORESTRY">BS FORESTRY</option>
                </select>
            </div>
            <div class="input-group mb-3 ms-5">
                <label for="level">Year Level</label><br>
                <select name="level" id="level">
                <option value=""></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
                <center>
                <button class="btn btn-success" type="submit" name="addData"
                    style="background-color: bg-info text-dark bg-opacity-25;">Registration</button>
            </center>
                    </div>
                </form>
            <?php } ?>


        </div>
    </div>

<?php } ?>




</div>
</div>
</body>

</html>






































