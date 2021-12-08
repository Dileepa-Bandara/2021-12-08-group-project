<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Document</title>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      position: relative;
      height: 100%;
    }

    .mainContainer {
      /* position: absolute; */
      width: 100%;
      /* top: 0;
        left: 0; */
      z-index: 10;
    }

    .topNav {
      background: rgb(202, 202, 202);
      /* top: 10px; */
      /* position: absolute; */
      display: flex;
      align-items: center;
      height: 60px;
      width: 100%;
      /* opacity: 0.1; */
    }

    .company-name {
      color: #ff6f00;
      font-size: 25px;
      font-weight: bolder;
      flex-basis: 1100px;
      margin-left: 10px;
    }

    .topNav a {
      text-decoration: none;
      float: right;
      margin-right: 20px;
      display: block;
      /* background: grey; */
      font-size: 20px;
    }

    .login {
      background: #071d56;
      color: white;
      padding: 8px;
      border-radius: 8px;
    }
    
    .login:hover {
            background-color: #6880d3;
            color: white;
        }

    .content {
      /* position: absolute; */
      /* display: flex; */
      /* justify-content: center; */
      /* top: 100px; */
      margin-top: 100px;
      width: 70%;
      padding: 10px;
      height: 600px;
      justify-content: center;
      /* margin-left: 25px; */
      /* margin: 20px; */
      /* background: grey; */
    }

    /* .top-header {
        font-size: 60px;
        font-weight: bold;
        margin: 50px auto;
        display: flex;
        justify-content: center;
      } */

    /* .bottom-header {
        font-size: 30px;
        font-weight: bold;
        display: flex;
        justify-content: center;
      }
       */

    .vacancy {
      border: 1px solid #6880d3;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0px 5px 5px 0px #6880d3;
    }

    .vacancy h3 {
      margin-bottom: 10px;
      font-size: 25px;
    }


    .vacancy p {
      margin-bottom: 25px;
      text-align: justify;
      font-family: arial;
      
      
    }

    .apply {
      background: #071d56;
      color: white;
      padding: 15px;
      text-decoration: none;
      border-radius: 8px;
      /* float: right; */
      font-family: arial;
      font-size: 20px;
      /* width:300px; */

    }

    .footer {
      background: darkgray;
      padding: 10px;
      /* position: absolute; */
      width: 100%;
      bottom: 0px;
      z-index: 20;
      height: 200px;
      display: flex;
      justify-content: space-between;
    }

    .column-one,
    .column-two,
    .column-three {
      width: 400px;
      /* background: red; */
      padding: 10px;
      display: flex;
      align-content: flex-start;
      align-items: center;
      justify-content: space-between;
      flex-direction: column;
    }

    ul {
      list-style-type: square;
      margin-left: 20px;

    }
    li {
      padding: 5px;
      font-family: arial;
    }

  </style>
</head>

<body>
  <div class="mainContainer">
    <div class="topNav">
      <div class="company-name">NexGen HRM</div>
      <a href="about.php">About</a>
      <a href="">Contact</a>
      <a href="">Careers</a>
      <a href="./login.php" class="login">Login</a>
    </div>
    <div class="content">
      <div class="vacancy">
        <h3>Software Engineer</h3>
        <p>The role of the Software Engineer will involve working throughout the full development lifecycle. This is a quick moving Agile environment working within a variety of technologies with a strong focus on incremental delivery, continuous integration, test driven development (TDD) across web based systems and architectures. This is an excellent opportunity to join a progressive company who will be expanding and be able to offer excellent career prospects for the right individual. </p>
        <p>DUTIES AND RESPONSIBILITIES</p>
        <ul>
          <li>Responsible for the core software engineering tasks in a project team</li>
          <li>Required to work with dynamic teams that are driven by project delivery goals</li>
          <li>Should process the drive to learn and continuously improve on work performances</li>
          <li>Makes optimum utilization of engineering tools and technologies to maintain a high productivity level in the team and achieve On-time delivery</li>
        </ul>
        <br>
        <p>EDUCATION / EXPERIENCES</p>
        <ul>
          <li>Individual should possess a Bachelor's degree in Computing or Information Technology/Management.</li>
          
        </ul>
        <br>
        <b><p>APPLY BEFORE 2021-11-12</p></b>
        <br>


        <a href="./addcandidate.php" class="apply ">Apply</a>

      </div>


    </div>
    <!-- <div class="vacancy"></div> -->
  </div>
  </div>
  <div class="footer">
    <div class="column-one">
      <div class="company-name">NexGen</div>

      <div>
        <h3>
          We provide unrivaled software solutions with passion to bring your
          business to the next level.
        </h3>
      </div>
    </div>
    <div class="column-two">
      <h3>QUICK LINKS</h3>
      <a href="">About</a>
      <a href="">Contact</a>
      <a href="">Careers</a>
    </div>
    <div class="column-three">
      <h2>Follow Us</h2>
    </div>
  </div>
</body>

</html>