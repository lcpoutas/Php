<?php

$matriz=[
    'frutas'=>['manzana', 'naranja', 'sandia', 'fresa'],
    'deportes'=>['futbol', 'tenis', 'baloncesto', 'beisbol'],
    'idiomas'=>['español', 'ingles', 'frances', 'italiano']
];

?>

<table border="1">
    <tr>
        <th>Frutas</th>
        <th>Deportes</th>
        <th>idiomas</th>
    </tr>
    <tr>
        <td>
            <?php for($i=0;$i<=3;$i++) :?>
                <?php echo $matriz['frutas'][$i]."</br>"?>
            <?php endfor ;?>
        </td>
    
        <td>
            <?php for($i=0;$i<=3;$i++) :?>
                <?php echo $matriz['deportes'][$i]."</br>"?>
            <?php endfor ;?>
        </td>

        <td>
            <?php for($i=0;$i<=3;$i++) :?>
                <?php echo $matriz['idiomas'][$i]."</br>"?>
            <?php endfor ;?>
        </td>
    </tr>
</table>