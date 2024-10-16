<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  
  <link rel="shortcut icon" href="../Asset/logo.png" type="image/x-icon">
  <div  class="Headersection">

        
    
    </div>
    <header>
<!-- <a href="admin.html"><button class="backbtn" type="button" ><i class="f    as fa-arrow-left"></i> Back</button></a> -->

    <center><h1>🗳️Electronics Voting System Admin Panel🗳️</h1></center>
	<h3 class="AA">
		<nav>
			<ul>
				<h3>
				
					<!-- <li><a href="../register.html"><i class="fas fa-user-plus"></i><span class="nav-text"> Registration</span></a></li>
					<li><a href="../login.html"><i class="fas fa-sign-in-alt"></i><span class="nav-text"> Login</span></a></li> -->
					<li><a href="#users-role1"><i class="fas fa-users"></i><span class="nav-text">Voter List</span></a></li>
          <li><a href="#users-role2"><i class="fas fa-users"></i><span class="nav-text"> Candidate List</span></a></li>
					<li><a href="#Candidate"><i class="fas fa-user-plus"></i><span class="nav-text"> Register Candidate</span></a></li>
				</h3>
			</ul>
		</nav>
	</h3>
</header>


  <style>
    .AA {
			text-align: right;
		}
header {
  background-color: #0050ec;
  padding: 20px;
  color: #fff;
}

h1 {
  margin: 0;
  font-size: 24px;
}

nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

nav ul li {
  display: inline-block;
  margin-right: 10px;
}

nav ul li a {
  color: #fff;
  text-decoration: none;
  font-size: 16px;
}

nav ul li a:hover {
  text-decoration: underline;
}

nav ul li a i {
  margin-right: 5px;
}






        .backbtn{
    padding: 5px;
    border-radius: 5px;
    background-color:#0e285d;
    width: 100px;
    font-size: 15px;
    float: left;


}

.backbtn:hover {
  transform: scale(1.1);
  

}
.loginbutton:hover {
    transform: scale(1.06);
    
  
  }
  .Headersection{
padding: 5px;
font-family: cursive;
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
    table {
      width: 100%;
      border-collapse: collapse;
      font-family: Arial, sans-serif;
    }

    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
      color: #333;
      font-weight: bold;
    }

    tr:hover {
      background-color: #f9f9f9;
    }

    img {
      width: 80px;
      height: 80px;
      object-fit: cover;
      border-radius: 50%;
    }

    .edit-btn {
      padding: 6px 12px;
      background-color: #0050ec;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .delete-btn {
      padding: 6px 12px;
      background-color: #FF0A0D;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .edit-field {
      width: 100%;
      padding: 6px;
    }
    .footer {
            text-align: center;
            margin-top: 20px;
            color: #797777;
        }
    .save-btn {
      padding: 6px 12px;
      background-color: #32CD32;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    
  </style>
  <title>Electronics Voting System Admin Panel</title>
</head>
<body>
 
<main>
    <section class="users">
      <section id="users-role1">
     

      
        <?php
        include("connect.php");

        // Fetch role 1 user records from the database
        $query_role1 = "SELECT * FROM users WHERE role = 1";
        $result_role1 = mysqli_query($connect, $query_role1);

        if(mysqli_num_rows($result_role1) > 0) {
          echo "<h2>Voter List</h2>";
          echo "<table>";
          echo "<thead>";
          echo "<tr>";
          echo "<th>Photo</th>";
          echo "<th>Name</th>";
          echo "<th>Mobile</th>";
          echo "<th>Password</th>";
          echo "<th>Address</th>";
          echo "<th>Email</th>";
          echo "<th>Registration Number</th>";
          echo "<th>Role</th>";
          echo "<th>Status</th>";
          echo "<th>Votes</th>";
          echo "<th>Action</th>";
          echo "</tr>";
          echo "</thead>";

          echo "<tbody>";

          while($row = mysqli_fetch_assoc($result_role1)) {
            // Display the user in the Role 1 table
            $id = $row['id'];
            $name = $row['name'];
            $mobile = $row['mobile'];
            $password = $row['password'];
            $address = $row['address'];
            $email = $row['email'];
            $registrationnum = $row['registrationnum'];
            $photo = $row['photo'];
            $role = $row['role'];
            $status = $row['status'];
            $votes = $row['votes'];

            echo "<tr>";
            echo "<td><img src='.././uploads_profile_pic/$photo'></td>";
            echo "<td class='editable' data-id='$id' data-field='name'>$name</td>";
            echo "<td class='editable' data-id='$id' data-field='mobile'>$mobile</td>";
            echo "<td class='editable' data-id='$id' data-field='password'>$password</td>";
            echo "<td class='editable' data-id='$id' data-field='address'>$address</td>";
            echo "<td class='editable' data-id='$id' data-field='email'>$email</td>";
            echo "<td class='editable' data-id='$id' data-field='registrationnum'>$registrationnum</td>";
            echo "<td class='editable' data-id='$id' data-field='role'>$role</td>";
            echo "<td class='editable' data-id='$id' data-field='status'>$status</td>";
            echo "<td class='editable' data-id='$id' data-field='votes'>$votes</td>";
            echo "<td><button class='edit-btn' onclick='editRow(this)'>Edit</button></td>";
            echo "<td><button class='delete-btn' onclick='deleteRow($id)'>Delete</button></td>";
            echo "</tr>";
          }

          echo "</tbody>";
          echo "</table>";
        } else {
          echo "No Role 1 records found.";
        }

        mysqli_close($connect);
        ?>
      </section>

      <section id="users-role2">
        <?php
        include("connect.php");

        // Fetch role 2 user records from the database
        $query_role2 = "SELECT * FROM users WHERE role = 2";
        $result_role2 = mysqli_query($connect, $query_role2);

        if(mysqli_num_rows($result_role2) > 0) {
          echo "<h2>Candidate List</h2>";
          echo "<table>";
          echo "<thead>";
          echo "<tr>";
          echo "<th>Photo</th>";
          echo "<th>Name</th>";
          echo "<th>Mobile</th>";
          echo "<th>Password</th>";
          echo "<th>Address</th>";
          echo "<th>Email</th>";
          echo "<th>Role</th>";
          echo "<th>Status</th>";
          echo "<th>Votes</th>";
          echo "<th>Action</th>";
          echo "</tr>";
          echo "</thead>";

          echo "<tbody>";

          while($row = mysqli_fetch_assoc($result_role2)) {
            // Display the user in the Role 2 table
            $id = $row['id'];
            $name = $row['name'];
            $mobile = $row['mobile'];
            $password = $row['password'];
            $address = $row['address'];
            $email = $row['email'];
            $registrationnum = $row['registrationnum'];
            $photo = $row['photo'];
            $role = $row['role'];
            $status = $row['status'];
            $votes = $row['votes'];

            echo "<tr>";
            echo "<td><img src='.././uploads_profile_pic/$photo'></td>";
            echo "<td class='editable' data-id='$id' data-field='name'>$name</td>";
            echo "<td class='editable' data-id='$id' data-field='mobile'>$mobile</td>";
            echo "<td class='editable' data-id='$id' data-field='password'>$password</td>";
            echo "<td class='editable' data-id='$id' data-field='address'>$address</td>";
            echo "<td class='editable' data-id='$id' data-field='email'>$email</td>";
            echo "<td class='editable' data-id='$id' data-field='registrationnum'>$registrationnum</td>";
            echo "<td class='editable' data-id='$id' data-field='role'>$role</td>";
            echo "<td class='editable' data-id='$id' data-field='status'>$status</td>";
            echo "<td class='editable' data-id='$id' data-field='votes'>$votes</td>";
            echo "<td><button class='edit-btn' onclick='editRow(this)'>Edit</button></td>";
            echo "<td><button class='delete-btn' onclick='deleteRow($id)'>Delete</button></td>";
            echo "</tr>";
          }

          echo "</tbody>";
          echo "</table>";
        } else {
          echo "No Role 2 records found.";
        }

        mysqli_close($connect);
        ?>
      </section>
    </section>
  </main>

  <script>
 


function deleteRow(id) {
  var confirmation = confirm("Are you sure you want to delete this user?");
  if (confirmation) {
    // Perform AJAX request to delete the user's details
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          // Reload the page after successful deletion
          location.reload();
        } else {
          alert('An error occurred while deleting the user.');
        }
      }
    };
    xhr.open('POST', 'delete.php', true); // Replace 'delete.php' with your delete script URL
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send('id=' + id);
  }
}


    // Function to enable inline editing
    function editRow(button) {
      var row = button.parentNode.parentNode;
      var fields = row.getElementsByClassName('editable');

      for (var i = 0; i < fields.length; i++) {
        var field = fields[i];
        var value = field.innerText;
        var input = document.createElement('input');
        input.className = 'edit-field';
        input.value = value;
        field.innerHTML = '';
        field.appendChild(input);
      }

      button.innerText = 'Save';
      button.onclick = function() {
        saveRow(this);
      };
    }

    // Function to save the edited data
    function saveRow(button) {
      var row = button.parentNode.parentNode;
      var fields = row.getElementsByClassName('editable');
      var data = {};

      for (var i = 0; i < fields.length; i++) {
        var field = fields[i];
        var id = field.dataset.id;
        var fieldName = field.dataset.field;
        var value = field.getElementsByTagName('input')[0].value;
        data[id] = data[id] || {};
        data[id][fieldName] = value;
      }

      // Perform AJAX request to update the data in the database
      var xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
            // Update the UI with the saved data
            var response = JSON.parse(xhr.responseText);
            for (var id in response) {
              if (response.hasOwnProperty(id)) {
                var fieldsToUpdate = row.querySelectorAll("[data-id='" + id + "']");
                for (var j = 0; j < fieldsToUpdate.length; j++) {
                  var fieldToUpdate = fieldsToUpdate[j];
                  var fieldNameToUpdate = fieldToUpdate.dataset.field;
                  fieldToUpdate.innerHTML = response[id][fieldNameToUpdate];
                }
              }
            }
          } else {
            document.write('An error occurred.');
          }
        }
      };
      xhr.open('POST', 'update.php', true);
      xhr.setRequestHeader('Content-Type', 'application/json');
      xhr.send(JSON.stringify(data));

      button.innerText = 'Edit';
      button.onclick = function() {
        editRow(this);
      };
    }
  </script>



<style>
  .backbtn{
    padding: 5px;
    border-radius: 5px;
    background-color: #0e285d;
    width: 100px;
    font-size: 15px;
    float: left;

    
}	
.backbtn:hover {
  transform: scale(1.1);
  

}

.footer {
            text-align: center;
            margin-top: 20px;
            color: #797777;
        }


        .container{
           max-width: 400px;
            margin: 0 auto;
            padding: 50px;
            background-color: #32f1ff;
            border-radius: 6px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            --input-focus: #2d8cf0;
  --font-color: #323232;
  --font-color-sub: #666;
  --bg-color: #fff;
  --main-color: #323232;
  padding: 20px;
  background: lightgrey;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: center;
  gap: 20px;
  border-radius: 5px;
  border: 2px solid var(--main-color);
  box-shadow: 4px 4px var(--main-color);
}

.input {
  width: 250px;
  height: 40px;
  border-radius: 5px;
  border: 2px solid var(--main-color);
  background-color: var(--bg-color);
  box-shadow: 4px 4px var(--main-color);
  font-size: 15px;
  font-weight: 600;
  color: var(--font-color);
  padding: 5px 10px;
  outline: none;
}

.input::placeholder {
  color: var(--font-color-sub);
  opacity: 0.8;
}

.input:focus {
  border: 2px solid var(--input-focus);
}

body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
        }  
        
        .dropbox{
    padding: 10px;
    width: 50%;
            
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 16px;
        }     
.atext{
    padding: 10px;
    width: 90%;
        
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 16px;
        }     

        input[type="number"],
        input[type="password"],
        input[type="text"],
        
        select {
            width: 40%;
            padding: 10px;
            border: 1px solid #000000;
            border-radius: 3px;
            font-size: 16px;
        }
        input[type="1text"],
        select {
            width: 40%;
            padding: 10px;
            border: 1px solid #000000;
            border-radius: 3px;
            font-size: 16px;
        }
        input[type="email"],
        select {
            width: 40%;
            padding: 10px;
            border: 1px solid #000000;
            border-radius: 3px;
            font-size: 16px;
        }
</style>
<main>
<section class="Candidate">
			<section id="Candidate">
<body>
    
        
    </div><hr>
    <div class="container">
    <form action="Candidateregister.php" method="post" enctype="multipart/form-data">
    <h2>Candidate Registration</h2>
<input type="text" name="Name" placeholder="Enter Candidate Name"  required>
<input type="number" name="Mobile" placeholder="Enter Mobile Number"  required><br><br>
<input type="password" name="Password" placeholder="Enter Password"  required>
<input type="password" name="cpassword" placeholder="Conform password"  required><br><br>
<input class="atext" type="1text" name="atext" placeholder="Enter Your Full Address" required>
<input class="email" type="email" name="email" placeholder="Enter Your Email" required><br><br>
<br><br>

<center>
<div class=".image-upload">
    <label for="photo">Upload Candidate Logo</label><br>
   
    <input  type="file" name="photo" id="photo"  />
    <img id="preview" src="../Asset/img.png" alt="Preview" width="100" height="100">
    <script>
		const input = document.getElementById("photo");
		const preview = document.getElementById("preview");

		input.addEventListener("change", function() {
			const file = this.files[0];
			if (file) {
				const reader = new FileReader();
				reader.addEventListener("load", function() {
					preview.setAttribute("src", this.result);
				});
				reader.readAsDataURL(file);
			}
		});
        
	</script>

    <style>
    .image-upload {
	display: flex;
	flex-direction: column;
	align-items: center;
	margin: 50px auto;
	width: 80px;
    
}

label {
	background-color: #ffffff;
	color: #000000;
	padding: 10px;
	border-radius: 5px;
	cursor: pointer;
}

input[type="file"] {
	display: none;
}

img {
	margin-top: 10px;
	max-width: 100%;
	border: 1px solid #ccc;
	border-radius: 5px;
	box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
}

button {
  --primary-color: #645bff;
  --secondary-color: #fff;
  --hover-color: #111;
  --arrow-width: 10px;
  --arrow-stroke: 2px;
  box-sizing: border-box;
  border: 0;
  border-radius: 20px;
  color: var(--secondary-color);
  padding: 1em 1.8em;
  background: var(--primary-color);
  display: flex;
  transition: 0.2s background;
  align-items: center;
  gap: 0.6em;
  font-weight: bold;
  text-align: center;
}

button .arrow-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
}

button .arrow {
  margin-top: 1px;
  width: var(--arrow-width);
  background: var(--primary-color);
  height: var(--arrow-stroke);
  position: relative;
  transition: 0.2s;
}

button .arrow::before {
  content: "";
  box-sizing: border-box;
  position: absolute;
  border: solid var(--secondary-color);
  border-width: 0 var(--arrow-stroke) var(--arrow-stroke) 0;
  display: inline-block;
  top: -3px;
  right: 3px;
  transition: 0.2s;
  padding: 3px;
  transform: rotate(-45deg);
}

button:hover {
  background-color: var(--hover-color);
}

button:hover .arrow {
  background: var(--secondary-color);
}

button:hover .arrow:before {
  right: 0;
}
    </style>
    
</div>

<br><br>
<div >
    <!-- <label>Y Role:</label> -->
<!-- <select class="dropbox"  name="role">
     <option value="1">Voter Register</option> -->
    <!-- <option value="2">Cantidate Register</option> -->
    
</select> 
</div>
</center>
<br>
<center><button  name="role" value="2" >Candidate Register <div class="arrow-wrapper">
    <div class="arrow"></div>

</div>
</section>
  </section >
  </main>

<!-- </button><br></center> -->
<!-- Already user👉<a href="login.html">Login here</a> -->
    </form>

</div>
    
    

</body>
</html>



  <div>
     <h4 class="footer">© 2023 E-Voting. All Rights Reserved</h4>
    </div>

</body>
</html>
