<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            position: relative;
            background-image: url(tab.jpg);
            background-position:center ;
            background-repeat: no-repeat;
            background-size:cover ;
            background-attachment: fixed;
        }
        th,td{
            padding: 20px;
            text-align: center;
            font-size: large;
            letter-spacing: 0.1rem;

        }
        tr{
            margin: 5px;
            border: 2px dotted gold;
           }
           input{
            height: 40px;
            width: 700px;
            font-size: x-large;
            margin-top: 10px;
            background-color: blueviolet;
            color: yellow;
            border-radius: 10px;
            border: 2px solid black;
           }
           input::placeholder{
            text-align: center;
            color: yellow;
            word-spacing: 0.2rem;
            letter-spacing: 0.1rem;
           }
           table{
            margin-top: 50px;
            border: 5px solid white;
            background: transparent;
            backdrop-filter: blur(10px);
            margin-bottom: 80px;
           }
           #sb{
            width: 200px;
            letter-spacing: 0.2rem;
            }
            #o{
                background-color: blue;
                height: 100px;
                width: 400px;
                position: absolute;
                top: 0px;
                left: 36%;
                margin-top: 55px;
                border: 2px solid black;
                display: none;
                
            }
            button{
                padding: 5px;
                border: 2px solid red;
                font-size: medium;
                background-color: yellow;
                margin-right: 7px;
                margin-left: 7px;
            }
            button:hover{
                transform: scale(0.9);
            }
    
        
    </style>
</head>
<body>
    <center>
        <div id="o">
            <h2>your are search data </h2>
        </div>
        <form action="" method="post">
            <h1 style="font-size:3rem; word-spacing: 1.3rem; color: lawngreen; filter:drop-shadow(2px 2px 2px black);">TO SEARCH IN BELOW USER NAME</h1>
        <input placeholder="enter your user name:" type="search" name="s" id="" ><br><br>
        <input type="submit" onclick="sidebar()" value="search" name="sb" id="sb">
        </form>
    <table border="1px" >
           <tr bgcolor="silver" style="color:black; "> 
            <th >no </th>
           <th >name </th>
           <th >email </th>
           <th>password</th>
           <th>action</th>
           </tr>
    <?php
    $con=mysqli_connect("localhost","root","","user");
    if(isset($_POST['sb'])){
    $a=$_POST['s'];
    
    $que="select * from sign_up where name like '%$a%'";
    $exec=mysqli_query($con,$que);
    
   
        
            while($row=mysqli_fetch_assoc($exec)){
  
        echo "<tr bgcolor='violet' style='color:black;'> 
        <td width='150px'>".$row['no']."</td>
        <td width='150px'>".$row['name']."</td>
        <td width='200px' >". $row['email']."</td>
        <td width='200px'>".$row['password']."</td>
        <td width='150px'>"."<button name='update'>update</button>".
       "<button name='delete'>delete</button>"."</td>        
        
            </tr>";
        
            
            }
        }
        if(isset($_POST['delete'])){        
            $que="delete from sign_up";
            $exec=mysqli_query($con,$que);
        }
            ?>   
            </table>
            </center>
       <script>
        function sidebar(){
            var a=document.querySelector("#o0")
            a.style.display='flex';
            a.style.transition='10s';
        }
       </script>
      
  
</body>
</html>