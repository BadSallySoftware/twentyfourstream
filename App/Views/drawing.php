
<?php 
error_reporting(E_ALL); 
include "header.php";
?>
<div class="container">
    <div class="row">
        <div class="col-6 offset-3 block">
        <h3 class=" text-center blockheader">Contest Drawing</h3>

            <div class="blockpadding">
                <form action="drawing/selectWinner" method="POST">
                    <div class="form-row">


                            <div class="form-group col-12">
                                <label  for="prizeField">Prize:</label>
                                <input class="form-control" type="text" id="prizeField" name="prize"/>
                            </div>
                    </div>
                    <div class="form-row">

                            <div class="form-group col-6">
                                <label  for="minForEntry">Minimum Donation For Entry:</label>
                                <input class="form-control" type="text" name="minForEntry"/>
                            </div>
                            <div class="form-group col-6">
                    
                            </div>
                            <div class="form-group col-6">
                            <div class="form-check">
                            <input class="form-check-input align-middle" id="mutliEntry" type="checkbox" name="multipleEntry"/>
                                <label class="form-check-label" for="mutliEntry">Allow Multiple Entries</label>
                            </div>

                                
                            </div>
                    </div>
                    <div class="form-row">

                            <input class="btn" type="submit" value="Choose Winner">
                            </div>        

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php 
include "footer.php";
?>