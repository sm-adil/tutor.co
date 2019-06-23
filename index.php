<?php 
    session_start();
    include("include/header.php");
?>
    <section class="header">
        <div class="container">
            <div class="info-box">
                <img id="asset" src="./assets/01.svg" alt="" />
            </div>
            <div id="data" class="info-box">
                <h1 class="hero-heading">Tutor.co</h1>
                <div class="dash"></div>
                <p>We offer multiple courses, expert instructors and best management of your time, effort and money. A modernized institution that take cares of every aspect of learning including exam preparation, overcoming the weaknesses & skill enhancement. Choose us to choose best outcome.</p>
                <a href="#services" class="link-btn">Learn More &#8594;</a>                
            </div>
        </div>
    </section>
    <section class="services" id="services">
        <div class="container" id="data">
            <h2>Best results are Outcome of Best Coaching</h2>
            <div class="dash" style="margin: 10px auto 10px auto !important"></div>
            <div class="cards">
                <div class="service-card">
                    <img src="./assets/08.svg" alt="">
                    <h3>Exam Guide</h3>
                    <p>Worried about exams ahead or not ready to take it? We are a one stop solution for your problem. Choose us to enter your exam with high confidence!</p>
                </div>
                <div class="service-card">
                    <img src="./assets/06.svg" alt="">
                    <h3>Assignment Helper</h3>
                    <p>Having problem with a course assignment? we have group of instructors to troubleshoot your shortcomings and help you to achieve your target results.</p>
                </div>
                <div class="service-card">
                    <img src="./assets/09.svg" alt="">
                    <h3>Skill Development</h3>
                    <p>Skills bring confidence to face the world. If you feel you have guts to learn a skill and need guideline, just knock us, get best assistance besides you.</p>
                </div>
            </div> 
        </div>
    </section>
<?php 
    include("include/footer.php");
?>