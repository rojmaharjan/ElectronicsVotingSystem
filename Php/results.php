<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<style>
  body {
    background-color: #f2f2f2;
    font-family: Arial, sans-serif;
  }

  h1 {
    text-align: center;
    margin-top: 20px;
  }

  #Group {
    max-width: 500px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  }

  .backbtn {
    background-color: #0050ec;
    color: white;
    font-size: 16px;
    font-weight: bold;
    padding: 10px 20px;
    border-radius: 2em;
    border-width: 0;
    box-shadow: 1px 5px 0 0 #0e285d;
    cursor: pointer;
    transition: 0.1s ease;
    float: left;

  }

  .backbtn:hover {
    transform: translateY(-4px);
    box-shadow: 1px 9px 0 0 #0e285d;
  }

  .backbtn:active {
    transform: translateY(4px);
    box-shadow: 0px 0px 0 0 #0e285d;
  }

  #Group > div {
    text-align: center;
    padding: 20px;
    margin-bottom: 20px;
    background-color: #f7f7f7;
    border-radius: 5px;
  }

  #Group img {
    float: right;
    margin-bottom: 20px;
  }

  #Group b {
    float: left;
  }

  hr {
    border-top: 1px solid #ccc;
  }

  
.footer {
            text-align: center;
            margin-top: 20px;
            color: #797777;
        }
</style>

<?php
include("connect.php");
session_start();
if(!isset($_SESSION['userdata']))
{
    header("location:../");
}
$userdata = $_SESSION['userdata'];
$groupesdata=$_SESSION['groupsdata'];

?>

<a href="../index.html"><button class="backbtn" type="button"><i class="fas fa-arrow-left"></i> Back</button></a>

<h1>🗳️ Result 🗳️</h1>

<div id="Group">
  <?php 
  if($_SESSION['groupsdata'])
  {
    for($i=0; $i<count($groupesdata); $i++)
    {
  ?> 
    <div id="result-<?php echo $groupesdata[$i]['id'] ?>">
      <b>Voting Candidate Result</b>
      <br>
      <img src=".././uploads_profile_pic/<?php echo $groupesdata[$i]['photo'] ?>" height="99" width="99">
      <br><br><br>
      <b>Candidate Name: <?php echo $groupesdata[$i]['name'] ?></b><br>
      <b>Total Votes: <span id="votes-<?php echo $groupesdata[$i]['id'] ?>"><?php echo $groupesdata[$i]['votes'] ?></span></b><br>
    </div>
    <hr>
  <?php 
    }
  }
  ?>
</div>



<div>
        <h4 class="footer">© 2023 E-Voting. All Rights Reserved</h4>
    </div>