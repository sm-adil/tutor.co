<?php 
    session_start();
    include("config/db.php"); // Include DB config

    if (!$_SESSION['username']):
        header('Location: login.php');
    else:
        include("include/header.php");
?>
    <div class="container" id="data">
        <!-- View for Admin -->
        <?php if ($_SESSION['id'] == 1): ?>
            <h1>Welcome back <?php echo $_SESSION['username']; ?>,</h1>

            <div class="cards">
                <div class="card">
                    <a href="view-students.php" style="color: #ff4200">
                        <img src="./assets/05.svg" alt="">
                        View Students
                    </a>
                </div>
                <div class="card">
                    <a href="view-assignment.php" style="color: #ff4200">
                        <img src="./assets/06.svg" alt="">
                        View Assignments
                    </a>
                </div>
                <div class="card">
                    <a href="add-assignment.php" style="color: #ff4200">
                        <img src="./assets/07.svg" alt="">
                        Add Assignment
                    </a>
                </div>
            </div>
        <?php else: ?> 
        <!-- View for Users -->
        <div class="user">
            <h1>Welcome <?php echo $_SESSION['username']; ?>,</h1>
            <a class="link-btn" href="view-assignment.php">Get Assignments</a>            
        </div>
        <?php endif ?>
    </div>
<?php 
    include("include/footer.php");
    endif
?>
