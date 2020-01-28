<?php 

    function affichageGenerale($donnees = [], $valeurs = []){
        echo ' <table class="table table-bordered table-striped table-responsive table-hover">';
            echo '<thead class="bg-success">
                    <tr>';
                foreach ($valeurs as $value) {
                    echo '<th>'.$value.'</th>';
                }
            echo '</tr>
                </thead>
                <tbody>';

            foreach ($donnees as $value) {
                echo '<tr>';
                foreach ($value as $val) {
                    echo '<td>'.$val.'</td>';
                }
                echo '</tr>';
            }
        echo '</tbody>
        </table>';
    }

?>