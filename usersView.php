<table>
    <tr>
        <th>Firstname</th>
        <th>Lastname</th>
    </tr>
<?php

    foreach($users as $user){
        echo '<tr>';
        echo '<td>';
        echo ('<p>'. $user->get_first_name() .'</p>');
        echo '</td>';
        echo '<td>';
        echo ('<p>'. $user->get_last_name() .'</p>');
        echo '</td>';
        echo '</tr>';
    }   
?>
</table>