
<?php 
error_reporting(E_ALL); 
include "header.php";
?>


<div class="container">
    <div class="row">
        <div class=".col-6 offset-3">
            <h3>Congratulations <?php echo $winner ?> ! You've won <?php echo $prize ?></h3>
        </div>
        <div class=".col-6 offset-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Donor</th>
                    <th>Entries in this drawing</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($entries as $entry): ?>
                    <tr>
                        <td><?php echo $entry['name'] ?></td>
                        <td class="text-center"><b><?php echo $entry['entries'] ?></b></td>

                    </tr>
                <?php endforeach;?>

            </tbody> 
            </table>
        </div>
    </div>
</div>