 <?php

$mysqli = new mysqli("localhost", "root", "", "db1");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT Overskrift, Pris, Varebeskrivelse, VareBillede FROM varetabel1 WHERE VareGruppe = ".$_GET['g'];

$result = mysqli_query($connect, $query);
while($row = mysqli_fetch_array($result)){
    echo '
        <table>
            <tr>
                <img class="tilbud" src="notif.png">
                <td class="overskrift"> '. $row["Overskrift"] .' </td>
                <td class="beskrivelse"> '. $row["Varebeskrivelse"] .' </td>
                <td class="pris"> '. $row["Pris"] .' </td>
                <td class="billede"> '. $row["VareBillede"] .' </td>
            </tr>
        </table>
    ';
}
?> 