<?php 
    session_start();
    include("config/db.php");

    include("include/header.php");
?>
    <div class="container">
        <?php 
            $id = $_GET['id'];
            $sql = "SELECT * FROM assignment WHERE id = '$id'";
            $result = mysqli_query($conn, $sql) or die('Error');
            
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $title = $row['title'];
                    $duedate = $row['duedate'];
                    $description = $row['description'];
        ?>
                    <div class="assignment-card" id="data">
                        <h2><?php echo $title; ?></h2>
                        <h4>Due Date: <?php echo $duedate; ?></h4>
                        <hr>
                        <div><?php echo $description; ?></div>
                    </div>
        <?php            
                }
            }
            else {
                $error = 'No assignments';
            }
        ?>
    </div>
<?php 
    include("include/footer.php");
?>
