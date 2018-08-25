
<?php 
error_reporting(E_ALL); 
include "header.php";
?>
<div class="container">
    <div class="row">
        <div class="col-6 offset-3 block">
            <h3 class="text-center blockheader" >Donor CSV Upload</h3>
            <div class="blockpadding">
                <form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
                    <div class="form-group mt-5">
                        <input class="form-control-file" type="file" name="upload"/>
                    </div>
                    
                    <input type="submit" class="btn" value="Upload">
                    
                </form>
            </div>
        </div>
    </div>
</div>






<?php 
include "footer.php";
?>