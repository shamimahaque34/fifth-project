<?php 

require_once '../vendor/autoload.php';

use App\classes\WordCharacterCount;
$total_word = '';
$total_character ='';

if(isset($_POST['btn'])){

    $wordCharacterCount = new WordCharacterCount($_POST);
  $result = $wordCharacterCount->index();
  extract($result);

//   echo '<pre>';
//   print_r($result);
//   echo '</pre>';

// echo $result['total_word'];
// echo '<br>';
// echo $result ['total_character'];

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
                                    <label class="col-form-label col-md-3">Enter Your String</label>
                                    <div class="col-md-9">
                                        <input type="text" name="given_string" class="form-control"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Result</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" cols="10" rows="5" ><?php echo " $total_word\n$total_character";?></textarea>
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
 