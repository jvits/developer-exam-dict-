<?php

$jsonLink = file_get_contents("http://igovphil.github.io/java-exam-01/uacs-agency.json");
$jsonUacs = json_decode($jsonLink, true);

if(count($jsonUacs)){
    echo '<table class="table">';
                echo '<th>UACS</th>';
                echo '<th>DEPARTMENT</th>';
                echo '<th>AGENCY</th>';
        
                foreach($jsonUacs as $uacsKey){
                    echo "<tr>";
                        echo "<td>";
                            echo json_encode($uacsKey['uacs']);
                        echo "</td>";

                        echo "<td>";
                            echo json_encode($uacsKey['department']);
                        echo "</td>";

                        echo "<td>";
                            echo json_encode($uacsKey['agency']);
                        echo "</td>";
                    echo "</tr>";
                }

    echo '</table>';
}


?>