<?php 
    session_start();

    if (!isset($_SESSION['username'])): 
        header('Location:login.php');     
    else :
        include("config/db.php");
        include("include/header.php");
?>
    <div class="container">
        <?php
            $sql = "SELECT * FROM assignment WHERE user_role = 1";
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

                <div class="buttons">
                    <?php if ($_SESSION['id'] == 1): ?>
                        <a class="green" href="view.php?id=<?php echo $id; ?>">View</a>
                        <a class="blue" href="edit.php?id=<?php echo $id; ?>">Edit</a>
                    
                        <form action="delete.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <input type="submit" name="delete" value="Delete">
                        </form>
                    
                    <?php else: ?>
                        <a class="green" href="view.php?id=<?php echo $id; ?>">View</a>
                    <?php endif ?>
                </div>
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
    endif
?>
