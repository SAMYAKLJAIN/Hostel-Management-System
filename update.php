<html>
<head>
<style>
table
{
border: 6px solid lightblue;
width:100%;
  border-radius: 14px;
  background:white;
  margin:-50px auto;
  height:100%;
    width:100%;
    padding:10px;
  text-align:center;
  
 }

 
 .header {
  padding: 30px;
  text-align: left;
  background: blue;
  color: white;
  font-size: 10px;
}
#search
{
  text-align: left;
  border: 2px solid #B0C4DE;

  border-radius: 10px ;
  }
  #frm{
  width: 30%;
  margin: 200px auto;
  padding: 10px;
  border: 2px solid #B0C4DE;
  background: grey;
  border-radius:  10px;
  

}
  <style>

.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}
figure {
  float: left;
  width: 10%;
  text-align: center;
  font-style: italic;
  font-size: smaller;
  text-indent: 0;

 
}

.navbar a {
  float: right;
  padding: 12px;
  color: white;
  text-decoration: none;s
  font-size: 17px;
}

.navbar a:hover {
  background-color: #000;
}

.active {
  background-color: #4CAF50;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}


  </style>
  </head>
<body>

<div class="navbar">

 <a href="report1.php"><i class="fa fa-fw fa-user"></i> Back</a>
  <a href="home1.php"><i class="fa fa-fw fa-user"></i>Home</a>
</div>
<div class="header" align="left">
  

  <h1>Update </h1>
  

</div>


<form action="update1.php" method="post">
<div id="frm"	>

<p>
 Adminno  <input type='text' name='adminno' placeholder='adminssionno'>
   <button type="submit"  class="btn" name="del" >Delete</button>
 </p>
  	<p> <select name="look">
    <option value="hname">Hostel name </option>
   <option value="roomno">room number</option>
    <option value="age">Age</option>
   <option value="contact">contact</option>
   <option value="sem">Semester</option>
    <option value="email">Email</option>
   <option value="name">name</option>
    <input type='text' name='tosearch' placeholder=''>
     <button type="submit"  class="btn" name="update" >Update</button>
</p>
    
  </select>
  </div>
