<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
    $(document).ready(function() {
        $(".notification").click(function() {
            $(".notifi-box").toggleClass("active");
        })
    });
</script>

<style>
    .notifi-box {
        width: 350px;
        height: 0px;
        /* opacity: 0; */
        display: none;
        position: absolute;
        top: 63px;
        right: 35px;

        border-radius: 10px;
        /* box-shadow: 10px 10px 6px red; */

        font-family: arial;
    }

    .notifi-box h2 {
        font-size: 16px;
        padding: 10px;
        border-bottom: 1px solid black;
        color: #6880d3;
        background-color: white;
    }

    .notifi-box h2 span {
        color: red;
    }

    .notifi-item {
        display: flex;
        border-bottom: 1px solid #6880d3;
        padding: 15px 5px;
        cursor: pointer;
        box-shadow: 5px 5px 5px #6880d3;
        background-color: white;
        /* border: 2px solid red; */
        border-radius: 5px;
    }

    .notifi-item:hover {
        background-color: #eee;
    }

    .notifi-item img {
        display: block;
        width: 20%;
        margin-right: 10px;
        border-radius: 50%;
    }

    .notifi-item .text h4 {
        color: #6880d3;
        font-size: 16px;
        margin-top: 10px;
    }

    .notifi-item .text p {
        color: black;
        font-size: 12px;
    }

    .notifi-box.active {
        display: block;


    }
</style>


<div class="top-container" id="top-container">

    <div class="menu__icon" id="menu__icon"><button }><img src="./assets/menu.png" alt=""> </button></div>
    <div class="title">NexGen HRM</div>
    <div class="position">Employee</div>
    <div class="notification"><a href="#"><img src="./assets/notification.png" alt="Notification"></a></div>
    <div class="logout"><a href="../../assets/logout.php">Logout</a></div>

    <div class="notifi-box" id="box">
        <h2>Notification <span>4</span></h2>
        <div class="notifi-item">
            <img src="./assets/leavemanager-dp.png" alt="">
            <div class="text">
                <h4>Linda Perera</h4>
                <p>Hey, Your leave request has been approved.</p>
            </div>
        </div>
        <div class="notifi-item">
            <img src="./assets/hrmanager-dp.png" alt="">
            <div class="text">
                <h4>Milan Fernando</h4>
                <p>Posted an Announcement. Go & Check it out</p>
            </div>
        </div>
        <div class="notifi-item">
            <img src="./assets/recmanager-dp.png" alt="">
            <div class="text">
                <h4>Priya Silva</h4>
                <p>Hey, Dashboard has new changes. Go & Check it out</p>
            </div>
        </div>
        <div class="notifi-item">
            <img src="./assets/payroll-dp.png" alt="">
            <div class="text">
                <h4>Suresh Bhathiya</h4>
                <p>Hey, Salary slips have sent to your emails.</p>
            </div>
        </div>

    </div>


</div>


<div class="side-container" id="side-container">

    <div class="avatar"><img src="./assets/emp-dp.png" alt="Avatar"></div>
    <div class="name">HI! <?php echo $email; ?></div>
    <div class="buttons">
        <button class="dropButton"><a href="index.php?Page=dashboard.php">Dashboard</a></button>
        <button class="dropButton"><a href="index.php?Page=profile.php">Profile</a></button>

        <button class="dropButton"> Leaves</button>
        <div class="drop-content">
            <a href="index.php?Page=pendingLeave.php">My Leaves</a>
            <a href="index.php?Page=remainingLeave.php">Apply Leaves</a>

        </div>
        <button class="dropButton"><a href="index.php?Page=salaryDetails.php">Salary</a></button>
        <button class="dropButton"><a href="index.php?Page=training.php">Training Schedule</a></button>
        <button class="dropButton"><a href="index.php?Page=news.php">News</a></button>
        <button class="dropButton"><a href="index.php?Page=sendEmail.php">Send Emails</a></button>

        <button class="dropButton"><a href="index.php?Page=feedback.php">Add Feedback</a></button>





    </div>
</div>