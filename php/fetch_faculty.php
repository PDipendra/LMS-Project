
<?php

                 $sql = "SELECT faculty_name FROM faculty";
                 $projresult = $conn->query($sql);                       
                 $projresult->setFetchMode(PDO::FETCH_ASSOC);
            echo '<select name="Batch Number"  id="proj_name" class="form-control" >';

            while ( $row = $projresult->fetch() ) 
            {
               echo '<option value="'.$row['batch_no'].'">'.$row['batch_no'].'</option>';
            }

            echo '</select>';

        ?>

