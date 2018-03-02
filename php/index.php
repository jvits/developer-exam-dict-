<?php

$jsonLink = file_get_contents("http://igovphil.github.io/java-exam-01/uacs-agency.json");
$jsonUacs = json_decode($jsonLink, true);



if(count($jsonUacs)){
    echo '<table class="table table-striped">';
                echo '<th>UACS</th>';
                echo '<th>DEPARTMENT</th>';
                echo '<th>AGENCY</th>';
        
                foreach($jsonUacs as $uacsKey){
                    echo "<tr>";
                        echo "<td style=' border: 1px solid #7f8c8d;'>";
                            echo preg_replace('/"/','',json_encode($uacsKey['uacs']));
                        echo "</td>";

                        echo "<td style=' border: 1px solid #7f8c8d;'>";
                            echo preg_replace('/"/','',json_encode($uacsKey['department']));
                        echo "</td>";

                        echo "<td style=' border: 1px solid #7f8c8d;'>";
                            echo preg_replace('/"/','',json_encode($uacsKey['agency']));
                        echo "</td>";
                    echo "</tr>";
                }

    echo '</table>';
}


?>