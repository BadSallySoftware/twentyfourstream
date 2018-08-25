
<?php 
error_reporting(E_ALL); 
include "header.php";
?>


<div class="container">
    <div class="row">
        <div class="col-10 offset-1">
            <h2 class="winnerAnnounce">Congratulations <?php echo $winner ?> ! You've won <?php echo $prize ?></h2>
        </div>
        
        <div class="col-10 offset-1 block">
        <h3 class="text-center blockheader">Drawing Participants</h3>
            <div class="blockpadding">
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
                                <td ><b><?php echo $entry['entries'] ?></b></td>

                            </tr>
                        <?php endforeach;?>

                    </tbody> 
                </table>
            </div>  
        </div>
    </div>
</div>
