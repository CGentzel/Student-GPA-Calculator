    <!-- Cadmus Gentzel -->
<!DOCTYPE html>
<html lang="en">  
    <meta charset="utf-8">

    <?php
    
        $students = array(
                array('name' => 'Rex Solertan', 'hrs_attempted' => 23, 'gpa_points' => 28, 'major' => 'CIT'),
                array('name' => 'Rivka Alexander', 'hrs_attempted' => 41, 'gpa_points' => 103, 'major' => 'EET'),
                array('name' => 'Ned Ramos', 'hrs_attempted' => 28, 'gpa_points' => 52, 'major' => 'BUS'),
                array('name' => 'Zoe Martinez', 'hrs_attempted' => 30, 'gpa_points' => 93, 'major' => 'WEB'),
                array('name' => 'Carl McElan', 'hrs_attempted' => 54, 'gpa_points' => 100, 'major' => 'WEB'),
                array('name' => 'Bob Palla', 'hrs_attempted' => 21, 'gpa_points' => 36, 'major' => 'CIT'),
                array('name' => 'Tilda Downey', 'hrs_attempted' => 31, 'gpa_points' => 86, 'major' => 'CIT'),
                array('name' => 'Mary Proth', 'hrs_attempted' => 33, 'gpa_points' => 105, 'major' => 'CIT'),
                array('name' => 'Zelda Rowe', 'hrs_attempted' => 12, 'gpa_points' => 39, 'major' => 'BUS'),
                array('name' => 'Sue Mar', 'hrs_attempted' => 20, 'gpa_points' => 50, 'major' => 'BUS'),
                array('name' => 'Max Stone', 'hrs_attempted' => 42, 'gpa_points' => 80, 'major' => 'EET'),
            );


        //--------------- TEST FOR OPTION TYPE ----------------
        
        if ($_POST['major'] == 'BUS'){
              $majorName = 'BUS';  
        } else if ($_POST['major'] == 'CIT'){
              $majorName = 'CIT';  
        } else if ($_POST['major'] == 'EET'){
              $majorName = 'EET';  
        } else if ($_POST['major'] == 'WEB'){
              $majorName = 'WEB';  
        };
    
        //echo $majorName;
    
        //------------ OPTION TYPE TEST END BLOCK ---------------
    
    

        //Calculate GPA
        function GPAcalculator($gpa_points, $hrs_attempted){
            $calcedGPA = $gpa_points / $hrs_attempted;
            round ($calcedGPA, 1); //round isn't working here
            return $calcedGPA;
        }
    
            
    
            echo "<p>Course: {$_POST['major']}</p>";
            echo"<table border='1' cellspacing='0' cellpadding='3' > \n"; 
            echo"<tr><td>Name</td><td>Hours</td><td>FinalGPA</td><td>Major</td></tr> \n";
    
    
            for($i=0; $i < count($students); $i++){
            
            if( $students[$i]['major'] == $_POST['major']){
                $name = $students[$i]['name'];
                $hrs = $students[$i]['hrs_attempted'];
                $gpa = $students[$i]['gpa_points'];
                $major = $students[$i]['major'];
                
                $finalGPA = GPAcalculator($gpa, $hrs);
                
                round($finalGPA, 1);   //round function here isn't working
                
                echo"<tr><td>$name</td><td>$hrs</td><td>$finalGPA</td><td>$major</td></tr>";
            };

            }
        echo"</table>";
    ?>
</html>