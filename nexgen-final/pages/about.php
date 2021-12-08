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
      /* width: 70%; */
      padding: 10px;
      height: 600px;
      justify-content: center;
      /* margin-left: 25px; */
      /* margin: 20px; */
      /* background: grey; */
    }

        .column {
        float: left;
        width: 50%;
        margin-bottom: 16px;
        padding: 0 8px;
        }

        .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        margin: 8px;
        }

        .about-section {
        padding: 100px;
        text-align: center;
        background-color: #6880d3;
        color: white;
        width: 100%;
        }

        .container {
        padding: 0 16px;
        }

        .container::after, .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .title {
            color: grey;
        }

        .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
        }

        .button:hover {
            background-color: #555;
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

   

  </style>
</head>

<body>
  <div class="mainContainer">
    <div class="topNav">
      <div class="company-name">NexGen HRM</div>
      <a href="">About</a>
      <a href="">Contact</a>
      <a href="career.php">Careers</a>
      <a href="./login.php" class="login">Login</a>
    </div>
    <div class="content">
    <div class="about-section">
    <h1>About Us </h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, obcaecati non architecto sunt ullam deleniti recusandae quaerat quidem enim ut dolorum sapiente! Ea modi quos placeat consequatur dolorem distinctio laboriosam.</p>
    
    </div>
    <br>
    <br>

<h2 style="text-align:center">Co-Founders</h2>
<div class="row">
  <div class="column">
    <div class="card"><br>
    <center><img src="hrmanager-dp.png" alt="Jane" style="width:40%"><center>
      <div class="container">
        <h2>Milan Perera</h2>
        <p class="title">CEO & Co-Founder</p><br>
        <p>He is a Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio aut quam reprehenderit debitis? Necessitatibus velit cupiditate est excepturi laborum soluta iusto, unde et. Doloremque, magni dolores voluptates asperiores consequuntur ullam! describes me lorem ipsum ipsum lorem.</p>
        <p>milan@gmail.com</p>
        <br>
        <br>
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card"><br>
    <center><img src="admin-dp.png" alt="Mike" style="width:40%;"><center>
      <div class="container">
        <h2>Priya Silva</h2>
        <p class="title">Co-Founder</p><br>
        <p>She is a Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo dolore sapiente, nihil ad facere ex natus quidem dicta eum, officiis illum? Cum, placeat repellat. Velit sequi sed est aliquid. Amet.</p>
        <p>priya@gmail.com</p>
        <br>
        <br>
      </div>
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