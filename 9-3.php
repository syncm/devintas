<?php





class Zmogus {
    public $vardas;
    public $pazymiai;

 
    function __construct($v, $p) {
     $this->vardas = $v;
     $this->pazymiai = $p;
    
 }
 }
 $mokiniai = [
    ['vardas' => 'Jonas', 'pazymiai' => ['lietuviu' => [4, 8, 6, 7], 'anglu' =>[6, 7, 8], 'matematika' => [3, 5, 4]]], 
    ['vardas' => 'Ona', 'pazymiai' => ['lietuviu' => [10, 9, 10], 'anglu' => [9, 8, 10], 'matematika' => [10, 10, 9, 9]]]
    ];
    
?>

 <table border="1">
 <tr>
 <th> Vardas</th>
 <th> Dalyko pazymiai</th>
 </tr>
 <?php foreach($mokiniai as $zmogus): ?>
 <tr>
 <td><?php echo $zmogus['vardas'];?></td>
 <td><?php echo $zmogus->pazymiai['pazymiai'];?></td>
 <?php endforeach; ?>
 
 
 
 </td>
 
 
