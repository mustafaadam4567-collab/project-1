<!DOCTYPE html>
   <head>
      <meta charset="UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title> Student Registration Form</title>
      <link rel="stylesheet" type="text/css" href="style.css" />
   </head>
  <body>
           <form method="post" action="register.php" target="_blank">
         <h2> REGISTER STUDENT DATA</h2>
       <class class="class">
         <label>Student Name     :</label>
                        <input type="text" name="student" placeholder="Enter Student Name" required/><br/>
        <label> Email Address    :</label>
                        <input type="text" name="email" placeholder="Enter Email Address" required /><br/>    
        <label> Student Number      :</label>
                       <input type="number" name="id" placeholder="Enter Student Number" required/><br/>
        <label> Year of Studdy   :</label>
                       <input type="number" name="year" placeholder="Enter Year of Study" required/><br/>
       <label> Batch Name   : </label>
                       <input type="text" name="batch" placeholder="Enter Batch Name" /><br/><br/>
       </class>   
         <div class="div">
                       <input  type="submit" name="submit" value="submit" /><br/><br/><br/>
         </div>
         </form>
   </body>
</html>