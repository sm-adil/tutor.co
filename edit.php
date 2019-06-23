<?php 
    session_start();
    include("config/db.php");

    $id = $_GET['id'];
    $sql = "SELECT * FROM assignment WHERE id = '$id'";
    $result = mysqli_query($conn, $sql) or die('Error');
    
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $title = $row['title'];
            $duedate = $row['duedate'];
            $description = $row['description'];
        }
    }

    if (isset($_POST['assignment'])) {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $duedate = $_POST['duedate'];
        $description = $_POST['description'];

        if ($title != '' && $duedate != '' && $description != '') {

            $sql = "UPDATE assignment SET title = '$title', duedate = '$duedate', description = '$description' WHERE id = '$id'";
            $query = $conn->query($sql);

            if ($query) {
                header('Location:dashboard.php');
            }
            else {
                $error = 'Failed to update data';
            }
            
        }
        else {
            $error = 'Please fill all the details!';
        }
    }
?>
<?php 
    if (!isset($_SESSION['username'])): 
        header('Location:login.php');        
    else:
        include("include/header.php");
?>
    <div class="container">
        <div class="forms">
            <div class="box" id="data">
                <h1>Update assignment</h1>
                <form action="edit.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="input-box">
                        <div class="form-field">
                            <label for="title">Add Assignment Title</label>
                            <input type="text" name="title" placeholder="Assignment Title" id="title" value="<?php  echo $title; ?>">
                        </div>
                        <div class="form-field">
                            <label for="duedate">Add Due Date</label>
                            <input type="date" name="duedate" placeholder="Due Date" id="duedate" <?php echo $duedate; ?>>
                        </div>
                    </div>
                    <textarea name="description" cols="50" rows="10" placeholder="Description" id="editor"><?php echo $description; ?></textarea>
                    <br>
                    <input type="submit" name="assignment" value="Update Assignment">   
                 
                    <div class="alert">
                        <?php 
                            if (isset($_POST['assignment'])) {
                                echo $error;
                            }
                        ?>
                    </div>
            </form>
        </div>
    </div>
<?php
    include("include/footer.php");
    endif
?>