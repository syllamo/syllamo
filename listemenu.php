<menu>
    <h1>Liste etudiants</h1>
<hr>
<?php
    $students[] = ["mohmm","f","c1",17,"info"];
    $students[] = ["khal","khalid","c2",18,"info"];
    $students[] = ["mon","montassir","c8",6.5,"info"];
    $students[] = ["yassi","yassin","c3",13,"eco"];
    $students[] = ["khad","khadia","c8",3,"eco"];
    $students[] = ["hamid","ahmed","c6",7,"info"];
    $students[] = ["noha","hoda","c4",12,"info"];
    $students[] = ["bra","ibrahim","c5",13,"eco"];
    $students[] = ["hana","hannan","c7",5,"eco"];
?>
<table >
    <thead>
        <tr>
            <th>nom</th>
            <th>prenom</th>
            <th>code</th>
            <th>note</th>
            <th>filiere</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($students as $s){
                echo "<tr>";
                    foreach($s as $j){
                        echo "<td>$j</td>";
                    }
                echo "<td><small><a href=''>modifier</a> | <a href=''>suprimmer</a>  </small></td>";
                echo "</tr>";
            }
        ?>
     </tbody>
</table>
</menu>