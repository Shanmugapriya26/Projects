<?php 
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "sahodb";

// CREATE CONNECTION
$conn = new mysqli($servername,
  $username, $password, $databasename);
  $query = "SELECT * FROM `sahotable` where (Genere='CS' or Genere='CSE' or Genere='IT' or Genere='Computer');";
  
  // FETCHING DATA FROM DATABASE
  $result = $conn->query($query);
?> 
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Select human Library</title>
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 2px solid #ddd;
}

th, td {
  text-align: left;
  font-size:larger;
  color: midnightblue;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #92e2e9;
}

tr:nth-child(odd) {
  background-color: #f4e9e9;
}

body { 
  background-color: #159ad7;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
#myInput {
  background-image: url('/css/searchicon.png'); 
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 100%; 
  font-size: 16px;
  padding: 12px 20px 12px 40px; 
  border: 1px solid #ddd; 
  margin-bottom: 12px; 
}

#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd;
  margin-top: -1px; 
  background-color: #f6f6f6; 
  padding: 12px; 
  text-decoration: none; 
  font-size: 18px;
  color: black; 
  display: block;
}

#myUL li a:hover:not(.header) {
  background-color: #eee;
}
.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
</style>
</head>
<body style="background: color #c5efef;">

    <div class="header">
      <img src="https://www.canva.com/design/DAE_jus_iRM/Uti8BLwbgNCEl8SaNOC_MQ/view?utm_content=DAE_jus_iRM&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton" >
      <div class="header-right">
        <a class="active" href="file:///C:/Users/SasiBanu/Downloads/frontend.html">Home</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
      </div>
    </div>
<h2>Human Libraries</h2>

<table> 
  <tr>
    <th>Name</th>
    <th>Level</th>
    <th>Go to</th>
  </tr>
  
  <tr>
  <?php 
  while($row = $result->fetch_assoc())
  {
  ?>
  <th><?php echo $row['firstname'] ?></th>
  <th><?php echo $row['ppin'] ?></th>
    <td>
      <?php
    $link_address1 = $row['plink'];
echo "<a href='".$link_address1."'>View and Book</a>";
?>
    </td>
  </tr>
  <?php 
  }
    ?>
  </tr> 
</table>

</body>
</html>
