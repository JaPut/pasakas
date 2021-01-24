<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>
<?php 
    require_once('../config/database.php'); 
    require_once('../class/class.php'); 
    $db = new operations();
    $result=$db->adview_record();
    $result2=$db->adview_record2();
    $result3=$db->adview_record3();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link rel="stylesheet" href="../css/indexview.css">
    <title>view_Edit</title>
   
</head>
<body>  
                        <?php $db->Store_Record(); 
                        $dbname = "table1";
                        ?>
                        
                        <form method="POST" id="myForm">
                        <label for="cars">WEB saturs:</label>
  <select type="tet" name="category">
    <!-- <option value="Nopietnās">nopietnās</option> -->
    <option value="Nenopietnas">nenopietnās</option>
    <option value="Sat[R]aucošās">satraucošās</option>
    <!-- <option value="Romantiskās">romantiskās</option> -->
    <!-- <option value="Aktuālas">aktuālās</option> -->
    <!-- <option value="Garās">garās</option> -->
    <option value="Nesaprotamas">nesaprotamās</option>
    <!-- <option value="Īsās">īsās</option> -->
    <!-- <option value="Reliģiskās">reliģiskās</option> -->
    <option value="Pamācošās">pamācošās</option>
    <option></option>
  </select>
  <select type="tet" name="category1">
    <!-- <option value="Nopietnās">nopietnās</option> -->
    <option value="Nenopietnas">nenopietnās</option>
    <option value="Sat[R]aucošās">satraucošās</option>
    <!-- <option value="Romantiskās">romantiskās</option> -->
    <!-- <option value="Aktuālas">aktuālās</option> -->
    <!-- <option value="Garās">garās</option> -->
    <option value="Nesaprotamas">nesaprotamās</option>
    <!-- <option value="Īsās">īsās</option> -->
    <!-- <option value="Reliģiskās">reliģiskās</option> -->
    <option value="Pamācošās">pamācošās</option>
    <option></option>
  </select>
                            
                            <input type="text" name="author" placeholder="Autors">
                            <input type="text" name="text" placeholder="Nosaukums" required>
                            <input type="text" name="content" placeholder="Saturs" required>
                            <input type="text" name="link" placeholder="Links">
                        <button name="btn_save"> Save </button>
                        </form>
                        <br>

                        <?php $db->Store_Comm(); ?>
                    <br>
                      
                        <table class="table-bordered">
                            <tr>
                                <td style="width: 0.5%"> ID </td>
                                <td style="width: 1%"> category </td>
                                <td style="width: 1%"> category1 </td>
                                <td style="width: 7%"> author </td>
                                <td> text </td>
                                <td> content </td>
                                <td style="width: 3%"> link </td>
                            </tr>
                            <tr>
                                <?php 
                                    while($data = mysqli_fetch_assoc($result))
                                    {
                                ?>
                                    
                    <td><div class="tdh"><?php echo $data['ID'] ?></div></td>
                    <td><div class="tdh"><?php echo $data['category'] ?></div></td>
                    <td><div class="tdh"><?php echo $data['category1'] ?></div></td>
                    <td><div class="tdh"><?php echo $data['author'] ?></div></td>
                    <td><div class="tdh"><?php echo $data['text'] ?></div></td>
                    <td><div class="tdh"><?php echo $data['content'] ?></div></td>
                    <td><div class="tdh"><?php echo $data['link'] ?></div></td>
                            </tr>
                            <?php
                                    }
                                ?>
                        </table>

<br>
                        <table class="table-bordered">
                            <tr>
                                <td style="width: 0.5%"> ID </td>
                                <td style="width: 6%"> Vārds </td>
                                <td> teksts </td>
                            </tr>
                            <tr>
                                <?php 
                                    while($data = mysqli_fetch_assoc($result2))
                                    {
                                ?>
                    <td><div class="tdh"><?php echo $data['comm_id'] ?></div></td>
                    <td><div class="tdh"><?php echo $data['name'] ?></div></td>
                    <td><div class="tdh"><?php echo $data['comm_text'] ?></div></td>
                            </tr>
                            <?php
                                    }
                                ?>
                        </table>

<br>

                        <table class="table-bordered">
                            <tr>
                                <td style="width: 0.5%"> ID </td>
                                <td style="width: 10%"> Sūtītājs </td>
                                <td> Ziņa </td>
                            </tr>
                            <tr>
                                <?php 
                                    while($data = mysqli_fetch_assoc($result3))
                                    {
                                ?>
                    <td><div class="tdh"><?php echo $data['id'] ?></div></td>
                    <td><div class="tdh"><?php echo $data['zinnesis'] ?></div></td>
                    <td><div class="tdh"><?php echo $data['zinaa'] ?></div></td>
                           </tr>
                            <?php
                                    }
                                ?>
                        </table>
<br>
          <div class="butn">
                       <button type="submit" onclick="location.href = 'view.php'"; class="batn" >text</button>        
                       <button type="submit" onclick="location.href = 'viewcom.php'"; class="batn" >comment</button>        
                       <button type="submit" onclick="location.href = 'viewzina.php'"; class="batn" >zina</button>        
    
                                </div>
                                <br><br>
                       <a href="logout.php">Click here</a> to Logout. <br><br>
                       <a href="../launch/index.php">Click here</a> to WEBpage.
                    </body>
</html>