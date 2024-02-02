<?php include 'header.php';
include 'conn.php';
if (!isset($_SESSION['logged_in'])) {
    header("location: login.php");
    ob_end_flush();
}
?>

<div class="row mt-4 justify-content-center">
    <div class="col-sm-10">
        <div class="table">
            <table class="table shadow p-2">
                <thead style="color:white;">
                    <th>#</th>
                    <th>Lastname</th>
                    <th>Firstname</th>
                    <th>MN</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Date of Birth</th>
                    <th>Course</th>
                    <th>Level</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
                    /*$userID = $_SESSION['u_id'];
                    $cnt = 1;
                    $select = $conn->prepare("SELECT * FROM registration WHERE user_id = ?");
                    $select->execute([$userID]);
                    */






                    $emID = $_SESSION['u_id'];
                    $cnt = 1;
                    $start = 0;
                    $rows_per_page = 5;

                    $n_of_rows = $conn->query("SELECT COUNT(*) as total FROM registration WHERE user_id=$emID")->fetchColumn();
                    $pages = ceil($n_of_rows / $rows_per_page);

                    if (isset($_GET['page-num'])) {
                        $page = $_GET['page-num'] - 1;
                        $start = $page * $rows_per_page;
                        $cnt = $start + 1;
                    }

                    $select = $conn->prepare("SELECT * FROM registration WHERE user_id=? LIMIT $start, $rows_per_page");
                    $select->execute([$emID]);



                    foreach ($select as $value) { ?>

                        <tr>
                            <td>
                                <?= $cnt++ ?>
                            </td>
                            <td>
                                <?= $value['lname'] ?>
                            </td>
                            <td>
                                <?= $value['fname'] ?>
                            </td>
                            <td>
                                <?= $value['mname'] ?>
                            </td>
                            <td>
                                <?= $value['contact'] ?>
                            </td>
                            <td>
                                <?= $value['address'] ?>
                            </td>
                            <td>
                                <?= $value['date'] ?>
                            </td>
                            <td>
                                <?= $value['course'] ?>
                            </td>
                            <td>
                                <?= $value['level'] ?>
                            </td>
                            <td>
                            <a href="index.php?edit&id=<?= $value['id'] ?>" class="text-decoration-none">✏️</a>
                                <a href="process.php?delete&id=<?= $value['id'] ?>" class="text-decoration-none">❌</a>
                            </td>
                        </tr>

                    <?php } ?>
                </tbody>
            </table>

            <div class="d-flex justify-content-between align-items-center" style="height: 3%;">
                <?php
                if (!isset($_POST['submit'])) {
                    ?>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="?page-num=1"> < </a></li>
                            <?php if (isset($_GET['page-num']) && $_GET['page-num'] > 1) { ?>
                                <li class="page-item"><a class="page-link"
                                        href="?page-num=<?php echo $_GET['page-num'] - 1 ?>">Previous</a></li>
                            <?php } ?>

                            <?php for ($i = 1; $i <= $pages; $i++) { ?>
                                <li class="page-item"><a class="page-link" href="?page-num=<?= $i ?>">
                                        <?php echo $i ?>
                                    </a></li>
                            <?php } ?>

                            <?php if (isset($_GET['page-num']) && $_GET['page-num'] < $pages) { ?>
                                <li class="page-item"><a class="page-link"
                                        href="?page-num=<?php echo $_GET['page-num'] + 1 ?>">Next</a></li>
                            <?php } ?>
                            <li class="page-item"><a class="page-link" href="?page-num=<?= $pages ?>"> > </a></li>
                        </ul>
                    </nav>
                <?php } ?>
                <a class="btn btn-primary" align="right" href="index.php">Back</a>
            </div>

        </div>
    </div>
</div>

</div>
</div>
</body>

</html>