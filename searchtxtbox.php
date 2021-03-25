<html>
<head>
    <title> Search Data into TextBox </title>
    <style>
        body{
            background-color: whitesmoke;
        }
        input {
            width: 40%;
            height: 5%;
            border: 1px;
            border-radius: 05px;
            padding: 8px 15px 8px 15px;
            margin: 10px 0px 15px 0px;
            box-shadow: 1px 1px 2px 1px grey;
        }
    </style>

</head>
    <body>
        <center>
        <h1> Search Data from Database into TextBox using PHP</h1>
            <form action="" method="POST">
                <input type="text" name="id" placeholder="Enter ID To Search"> <br/>
                <input type="submit" name="search" value="Search Data">
        
            </form>

<?php
 
        $connection = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($connection, 'dblab');

        if (isset($_POST['search']))
        {
            $id = $_POST['id'];

            $query = "SELECT * FROM dblab where id='$id' ";
            $query_run = mysqli_query($connection,$query);

            while($row = mysqli_fetch_array($query_run))
            {
                ?>
                    <form action="" method="POST">
                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>" ><br>
                    <input type="text" name="fname" value="<?php echo $row['fname'] ?>"><br>
                    <input type="text" name="Iname" value="<?php echo $row['Iname'] ?>" ><br>
                    <input type="text" name="email" value="<?php echo $row['email'] ?>" ><br>
                    <input type="text" name="password" value="<?php echo $row['password'] ?>"><br>
                    <input type="text" name="address" value="<?php echo $row['address'] ?>"><br>
                    </form>
                <?php
            }
        }
?>

        </center>
    </body>
</html>