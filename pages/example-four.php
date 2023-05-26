<?php


require_once '../vendor/autoload.php';

use App\classes\ExampleFour;
$result='';

if(isset($_POST['btn'])){
    $example = new ExampleFour($_POST);
    $result = $example->index();
}

?>




<?php  include './includes/header.php';?>

<section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-success">
                            <h3>Please fill up the form carefully</h3>
                        </div>

                        <div class="card-body">
                            <form action="" method="post">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Starting Number</label>
                                    <div class="col-md-9">
                                        <input type="number" name="starting_number" class="form-control"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Ending Number</label>
                                    <div class="col-md-9">
                                        <input type="number" name="ending_number" class="form-control"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Decriment</label>
                                    <div class="col-md-9">
                                        <input type="number" name="decriment" class="form-control"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Result</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control"><?php echo $result; ?></textarea>
                                    </div>
                                </div>

                               

                                <div class="form-group row">
                                    <label class="col-from-label col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" name="btn" class="btn btn-outline-sucess btn-block" value="Submit"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


<?php  include './includes/footer.php';?>

