<?php
include("connect.php");
session_start();
if(!isset($_SESSION['userdata']))
{
    header("location:../");
}
$userdata = $_SESSION['userdata'];
$groupesdata=$_SESSION['groupsdata'];

if($_SESSION['userdata']['status']==0)
{
    $status='<b style="color :red">Not Voted</b>';
}else
{
    $status='<b style="color :green">Voted</b>';
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="shortcut icon" href="../Asset/logo.png" type="image/x-icon">
<title>Online Voting System</title>
</head>

<body>
<style>

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
    float: right;

  }
  .Headersection{
padding: 5px;
font-family: cursive;
}
  .backbtn:hover {
    transform: translateY(-4px);
    box-shadow: 1px 9px 0 0 #0e285d;
  }

  .backbtn:active {
    transform: translateY(4px);
    box-shadow: 0px 0px 0 0 #0e285d;
  }

button {
  background-color: #0050ec;
  color: white;
  font-size: 16px;
  font-weight: bold;
  padding: 15px 20px;
  border-radius: 2em;
  cursor: pointer;
  transition: 0.1s ease;
  border-width: 0;
  box-shadow: 1px 5px 0 0 #0e285d;
}

button:hover {
  transform: translateY(-4px);
  box-shadow: 1px 9px 0 0 #0e285d;
}

button:active {
  transform: translateY(4px);
  box-shadow: 0px 0px 0 0 #0e285d;
}

#logoutbtn{
    padding: 5px;
    border-radius: 5px;
    background-color: rgb(51, 255, 0);
    width: 100px;
    font-size: 15px;
    float: right;
}




#Group {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: #32f1ff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    
  }


  #Group > div {
   
    padding: 20px;
    margin-bottom: 20px;
    background-color: #32f1ff;
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


.image-button{
    
  width: 50px;
  height: 50px;
  background-image: url('.././Asset/votebtn.png');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  float: right;
  border: none;
  cursor: pointer;
  text-indent: -9999px;
 
  float: left;
}

.image-button:hover {
  transform: scale(1.3);
  

}
#logoutbtn:hover {
  transform: scale(1.1);
  

}
.backbtn:hover {
  transform: scale(1.1);
  

}
.footer {
            text-align: center;
            margin-top: 20px;
            color: #797777;
        }

 

body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}



.profile-container {
  position: absolute;
  top: 10px; 
  left: 10px; 
  width: 200px; 
  height: 60px; 
  display: flex; 
  align-items: center;
}

.profile-icon {
  background-color: #007bff;
  width: 60px;
  height: 60px;
  border-radius: 50%;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.user-name {
  margin-left: 10px; 
  font-size: 16px; 
  
}

.profile-info {
  display: none;
  position: absolute;
  top: 10px; /* Adjusted the top position to align with the profile icon */
  left: 80px; /* Adjusted the left position to move it to the left side */
  width: 280px;
  background-color: #32f1ff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
  padding: 20px;
  text-align: left;
  border-radius: 5px;
}

.profile-info img {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  margin-bottom: 10px;
}

.profile-info h2 {
  margin: 0;
  padding: 0;
}

.close-btn {
  background-color: #FF0000;
  color: white;
  font-size: 16px;
  font-weight: bold;
  padding: 10px 20px;
  border-radius: 2em;
  border-width: 0;
  box-shadow: 1px 5px 0 0 #0e285d;
  cursor: pointer;
  transition: 0.1s ease;
  float: right;
}



</style>

<div id="mainsection">
    
<div id="headersection">
<div class="profile-container">


    <div class="profile-icon" onclick="toggleProfile()">
    <?php
      // Assuming $userdata contains the database fetched user data
      echo '<img class="profile-icon" src=".././uploads_profile_pic/' . $userdata['photo'] . '" alt="Profile Icon" onclick="toggleProfile()">';
    ?>

</div>
    <span class="user-name">
      <b>Hi <?php echo $userdata['name']; ?></b><br>
      <b>Status:<?php echo $status  ?></b>
    </span>
    <div class="profile-info" id="profileInfo">
      <button class="close-btn" onclick="closeProfile()">Close</button>
      <!-- <center><b>Your Profile</b></center> -->
      <center>
        <?php
          // Assuming $userdata contains the database fetched user data
          echo '<img src=".././uploads_profile_pic/' . $userdata['photo'] . '" height="140" width="140" alt="Profile Image"><br><br>';
          ?>
      </center>
      <b>Name: <?php echo $userdata['name']  ?></b> <br><br>
      <b>Mobile: <?php echo $userdata['mobile']  ?></b><br><br>
      <b>Address: <?php echo $userdata['address']  ?></b><br><br>
      <b>Email: <?php echo $userdata['email']  ?></b><br><br>
      <b>Status: <?php echo $status  ?></b><br><br>
    </div>
  </div>
<a href="../login.html"><button class="backbtn" type="button" ><i class="fas fa-arrow-left"></i> LogOut</button></a>
<!-- <a href="register.html"><input id="logoutbtn" type="button" value="Logout"></a> -->

<center><h1>🗳️Electronics Voting System🗳️</h1></center>

</div>


</div><br>
<hr>

   

<script>
var profileInfo = document.getElementById("profileInfo");
var isOpen = false;

function toggleProfile() {
  if (!isOpen) {
    profileInfo.style.display = "block";
    isOpen = true;
  }
}

function closeProfile() {
  profileInfo.style.display = "none";
  isOpen = false;
}


    </script>
 
<div id="Group">
<?php 
if($_SESSION['groupsdata'])
{
    for($i=0; $i<count($groupesdata); $i++)
    {
?> 
        <div ><center><b>Voting Cantidate</b></center>
       
    
            <img style="float: right" src=".././uploads_profile_pic/<?php echo $groupesdata[$i]['photo'] ?>" height="99" width="99"> <br><br>
            <b style="float: left">Cantidate Name: <?php echo $groupesdata[$i]['name'] ?> </b> <br>
            <!-- <b style="float: left">Votes:<?php echo $groupesdata[$i]['votes'] ?></b><br> -->
            <form action="" method="post"><br>
                <input type="hidden" name="gvotes" value="<?php echo $groupesdata[$i] ['votes']  ?>">
                <input type="hidden" name="gid" value="<?php echo $groupesdata[$i] ['id']  ?>">
                <input class="image-button" type="Submit" name="votesbtn" value="Vote" id="votebtn">
            </form>
            
    </div><br><br><br><hr>
        
<?php 
    }
}
?>
</div>


 



</body><br>
<div>
        <h4 class="footer">© 2023 E-Voting. All Rights Reserved</h4>
    </div>
</html>
<?php
include("connect.php");
if (isset($_POST['gvotes']) && isset($_POST['gid'])) {
    $votes = $_POST['gvotes'];
    $total_votes = $votes + 1;
    $gid = $_POST['gid'];
    $uid = $_SESSION['userdata']['id'];

    // Check if the user has already voted
    if ($_SESSION['userdata']['status'] == 0) {
        // Update the votes for the candidate
        $update_votes = mysqli_query($connect, "UPDATE users SET votes='$total_votes' WHERE id='$gid'");

        // Update the user's status to indicate that they have voted
        $update_user_status = mysqli_query($connect, "UPDATE users SET status='1' WHERE id='$uid'");

        if ($update_votes && $update_user_status) {
            // Retrieve the updated group data
            $groups = mysqli_query($connect, "SELECT * FROM users WHERE role=2");
            $groupesdata = mysqli_fetch_all($groups, MYSQLI_ASSOC);

            // Update the session data
            $_SESSION['userdata']['status'] = 1;
            $_SESSION['groupsdata'] = $groupesdata;

            // Display success message as a popup window
            echo '<div id="message" class="popup success">Vote submitted successfully!</div>';
        } else {
            // Display error message as a popup window
            echo '<div id="message" class="popup error">Some error occurred while updating votes!</div>';
        }
    } else {
        // Display error message as a popup window
        echo '<div id="message" class="popup error">You have already voted!</div>';
    }
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Online Voting System</title>

    <style>
        
        .popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.8);
            color: #000000;
            padding: 30px;
            border-radius: 5px;
            z-index: 9999;
            background-color: #0050ec;
    color: white;
    font-size: 31px;
    font-weight: bold;
    padding: 10px 20px;
   
    border-width: 0;
    box-shadow: 1px 5px 0 0 #0e285d;
    cursor: pointer;
    transition: 0.1s ease;
    float: left;

        }

        .success {
            background-color: #25FF1F;
        }

        .error {
            background-color: #FF3224;
        }
    </style>
</head>
<body>
    

    
    <script>
        setTimeout(function() {
            var message = document.getElementById('message');
            if (message) {
                message.style.display = 'none';
            }
        }, 2000);
    </script>
</body>
</html>
