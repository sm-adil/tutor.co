<?php 
    session_start();
    include("config/db.php");

    if (isset($_POST['assignment'])) {
        $title = $_POST['title'];
        $duedate = $_POST['duedate'];
        $description = $_POST['description'];

        if ($title != '' && $duedate != '' && $description != '') {

            $sql = "INSERT INTO assignment (title, duedate, description, user_role) VALUES ('$title', '$duedate', '$description', 1)";
            $query = $conn->query($sql);

            if ($query) {
                header('Location:login.php');
            }
            else {
                $error = 'Failed to register user';
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
                <h1>Add new assignment</h1>
                <form action="add-assignment.php" method="POST">
                    <div class="input-box">
                        <div class="form-field">
                            <label for="title">Add Assignment Title</label>
                            <input type="text" name="title" placeholder="Assignment Title" id="title">
                        </div>
                        <div class="form-field">
                            <label for="duedate">Add Due Date</label>
                            <input type="date" name="duedate" placeholder="Due Date" id="duedate">
                        </div>
                    </div>
                    <label for="description">Add Description</label>
                    <textarea name="description" cols="30" rows="10" placeholder="Description" id="editor" id="description"></textarea>
                    <br>
                    <input type="submit" name="assignment" value="Add Assignment">   
                 
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