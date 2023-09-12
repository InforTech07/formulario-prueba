<html>
  <head>
    <title>Login | safer</title>
    <style>
      body{
        display: flex;
        justify-content: center;
      }
      input[type="submit"] {
        background-color: #007bff; 
        color: white; 
        padding: 10px 20px; 
        border: none; 
        cursor: pointer; 
        border-radius: 5px; 
      }
      input[type="submit"]:hover {
        background-color: #0056b3; 
      }
    </style>
  </head>
  <body>
    <form action="<<url-archivo intermediario>>"  method="POST">
        <input type="text" id="user" name="user"  value="<<usuario>>" required hidden><br><br>
        <input type="password" id="password" name="password" value="<password>" required hidden><br><br>
        <input type="submit" value="Ir a safer">
    </form>
  </body>
</html>
