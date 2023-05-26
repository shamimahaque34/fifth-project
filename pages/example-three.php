<?php

require_once '../vendor/autoload.php';

use App\classes\ExampleThree;

if(isset($_POST['btn']))
{
    $exampleThree = new ExampleThree($_POST);
   $result= $exampleThree->index();
   extract($result);
}
?>


<?php  include './includes/header.php';?>



<section class="py-5">
        <div class="container">
            <?php if(isset($_POST['btn'])) { ?>
            <div class="row mb-3">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                      <th>Name</th>
                                      <th>Email</th>
                                      <th>Mobile</th>
                                      <th>Subject</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                      <td><?php echo $name;?></td>
                                      <td><?php echo $email;?></td>
                                      <td><?php echo $mobile;?></td>
                                      <td>
                                          <?php 

                                          foreach($subject as $item){
                                              echo $item.'<br>';
                                          }
                                          ?>
                                      </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header bg-success">
                            <h3>Please fill up the form carefully</h3>
                        </div>

                        <div class="card-body">
                            <form action="" method="post">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Student Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="name" class="form-control"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Email Address</label>
                                    <div class="col-md-9">
                                        <input type="email" name="email" class="form-control"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-3">Mobile Number</label>
                                    <div class="col-md-9">
                                        <input type=" number" class="form-control" name="mobile"/>
                                    </div>
                                </div>

                               

                                <div class="form-group row">
                                    <label class="col-md-3">Subject Name</label>
                                    <div class="col-md-9">
                                      <label>  <input type="checkbox" name="subject[]" value="Bangla" />Bangla</label>
                                      <label>  <input type="checkbox" name="subject[]" value="Math"/>Math</label>
                                      <label>  <input type="checkbox" name="subject[]" value="English"/>English</label>
                                      <label>  <input type="checkbox" name="subject[]"value="Physics" />Physics</label>
                                      <label>  <input type="checkbox" name="subject[]"value="Biology" />Biology</label>
                                      <label>  <input type="checkbox" name="subject[]"value="Chemistry" />Chemistry</label>
                                      <label>  <input type="checkbox" name="subject[]"value="Zoology" />Zoology</label>
                                      
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="Submit" name="btn" class="btn btn-outline-success"/>
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