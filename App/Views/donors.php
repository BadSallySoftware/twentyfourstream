
<?php 
error_reporting(E_ALL); 
include "header.php";
?>
<h1>Donor's Page</h1>

<!-- <pre>
<?php //var_dump($donors);?>
</pre> -->

<table class="table table-striped">
<thead>
    <tr>
        <th>Donor</th>
        <th>Total Donation This Event</th>
    </tr>
</thead>
<tbody>
    <?php foreach($donors as $donor): ?>
        <tr>
            <td><?php echo $donor['name'] ?></td>
            <td><?php echo $donor['donated'] ?></td>

        </tr>
    <?php endforeach;?>

</tbody> 
</table>


<?php 
include "footer.php";
?>