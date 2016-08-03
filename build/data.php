<?php 

    $host_name = 'localhost';
    $user_name = 'root';
    $user_pass = '';
    $db_name = 'cruise';

     $con = mysql_connect($host_name, $user_name, $user_pass) or die("Couldn't connect to the database.");

    if(!$con){
        die("Not connected!" . mysql_error());
    }else{
        #echo 'Connected!';
    }

    if(!mysql_select_db($db_name)){
        echo 'No access to database name.';
    }else{
        #echo 'access to database name.';
    }
    
      #mysql_close($con);
    
    // Display Destination menu from the database.
    function dest_menu(){
        
        $query = "SELECT * FROM `destination_menu`";
        
        echo '<select name="destinations" id="dest" required>';
        echo '<option value="">Select Destination</option>';
        
        if($run = mysql_query($query)){
            #echo 'query!';
            while($result = mysql_fetch_assoc($run)){
                
                echo '<option name="'.$result['name'].'" value="'.$result['name'].'">'.$result['name'].'</option>';
                #echo $result['name'].'<br>';
            }
        }else{
            #echo 'not query';
        }
        echo '</select><!--// End Select Destination -->';
        
    }

    // Display Cruise menu from the database.
    function cruise_menu(){
        
        $query = "SELECT * FROM `cruise_menu`";
        
        echo '<select name="cruise" id="dest" required>';
        echo '<option value="">Select Cruise</option>';
        
        if($run = mysql_query($query)){
            #echo 'query!';
            while($result = mysql_fetch_assoc($run)){
                
                echo '<option name="'.$result['name'].'" value="'.$result['name'].'">'.$result['name'].'</option>';
                #echo $result['name'].'<br>';
            }
        }else{
            #echo 'not query';
        }
        echo '</select><!--// End Select Cruise -->';
        
    }

    // Display Ships menu from the database.
    function ships_menu(){
        
        $query = "SELECT * FROM `ships_menu`";
        
        echo '<select name="ships" id="dest" required>';
        echo '<option value="">Select Ships</option>';
        
        if($run = mysql_query($query)){
            #echo 'query!';
            while($result = mysql_fetch_assoc($run)){
                
                echo '<option name="'.$result['name'].'" value="'.$result['name'].'">'.$result['name'].'</option>';
                #echo $result['name'].'<br>';
            }
        }else{
            #echo 'not query';
        }
        echo '</select><!--// End Select Ships -->';
        
    }

    // Display Sailing From menu from the database.
    function sailing_menu(){
        
        $query = "SELECT * FROM `sailing_menu`";
        
        echo '<select name="sailing" id="dest" required>';
        echo '<option value="">Sailing from</option>';
        
        if($run = mysql_query($query)){
            #echo 'query!';
            while($result = mysql_fetch_assoc($run)){
                
                echo '<option name="'.$result['name'].'" value="'.$result['name'].'">'.$result['name'].'</option>';
                #echo $result['name'].'<br>';
            }
        }else{
            #echo 'not query';
        }
        echo '</select><!--// End Select Sailing -->';
        
    }
  
?>