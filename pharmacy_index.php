<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript">
    function validate() {        
        if(!document.form1.iname.value.match(/^[a-zA-Z][A-Za-z\s]*[a-zA-Z]$/)) {
            alert("Name should contain alphabets only!");
            document.form.iname.focus();
            return false;
        } 
        
    }
</script>
</head>
<body bgcolor="pink"><br>
    <center>
        <h2>Pharamacy Management System</h2>
        <form action="insertion.php" name="form" method="POST" onsubmit="return(validate())" >
            <br>
     <table>
        <tr> <td> <label ="code">Medicine Code : </label> </td>
        <td> <input type="text" name="code" required></td>
         </tr>
        <tr> <td> <label ="name">Medicine Name : </label> </td>
        <td> <input type="text" name="name" required></td>
        </tr>
        <tr> <td> <label ="qu">Quantity :</label> </td>
        <td> <input type="text" name="qu" required></td>
       </tr>
       <tr> <td> <label ="price">Unit Price :</label> </td>
        <td> <input type="text" name="price" required></td>
         </tr>
          <tr> <td></td>
        <td> <input type="submit" name="insert" value="Insert"></td>
         </tr>
          </table>
     </form>
    </center>
    <br><br>


    <center>
        <h2>Final Bill</h2>
        <table border="1" cellpadding="15">
            <tr>
                
                <td>Medicine Code</td>
                <td>Medicine Name</td>
                <td>Quantity</td>
                <td>Unit Price</td>
                <td>Total</td>
              
             
            </tr>

            <?php
            require 'connection.php';
            $r = mysqli_query($conn, "select * from medicine");
            while ($row = mysqli_fetch_assoc($r)) {
                
            ?>

                <tr>
                    <td><?php echo $row['med_code']; ?></td>
                    <td><?php echo $row['med_name']; ?></td>
                    <td><?php echo $row['med_Qnty']; ?></td>
                    <td><?php echo $row['u_price']; ?></td>
                    <td><?php echo $row['total']; ?></td>

                  
                </tr>

            <?php

            }
            ?>
        </table>
    </center>
</body>

</html>