<?php


class Zmogus {
   public $vardas;

   function __construct($v) {
    $this->vardas = $v;
   
}
}




$zmones = [
new Zmogus('Jonas'),
new Zmogus('Ona'), 
new Zmogus('Algis')
];

?>

<table border="1">
<tr>
<th> Vardas</th>

</tr>
<?php foreach($zmones as $zmogus): ?>
<tr>
<td><?php echo $zmogus->vardas;?></td>


<?php endforeach; ?>



</td>






