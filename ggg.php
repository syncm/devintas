<!DOCTYPE html>
<html>

<body>

<?php
class Zmogus {
    public $vardas;
    public $pavarde;


function __construct($v, $p) {
    $this->vardas = $v;
    $this->pavarde = $p;
}
}



$zmones = [
new Zmogus('Jonas', 'Jonaitis'),
new Zmogus('Albertas', 'Albertrosas'),
new Zmogus('Karolis', 'Liutackas'),
];



?>
<table>
<tr>
<th>Vardas </th><th>Pavarde</th>
</tr>
<?php foreach ($zmones as $zmogus): ?>
<tr>
<td><?= $zmogus->vardas ?> </td>
<td><?= $zmogus->pavarde ?> </td>
</tr>

<?php endforeach; ?>
</table>
</body>
</html>
