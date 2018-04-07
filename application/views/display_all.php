<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>Display Database</title>
   </head>
   <body>
      <div class="panel panel-info">
         <div class="panel-heading">Display Database Data
            
         </div>
         <div class="panel-body">
         This is where it displays all
         
      </div>
   </div>
   <table border="1">
      <tbody>
         <tr>
            <td>User ID</td>
            <td>UserName</td>
            <td>Password</td>
         </tr>
         <?php foreach ($info as $row)
         {
         ?><tr>
            <td><?php echo $row->id;?></td>
            <td><?php echo $row->name;?></td>
            <td><?php echo $row->password;?></td>
         </tr>
         <?php }
         ?>
      </tbody>
   </table>
   
</body>
</html>