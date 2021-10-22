<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Student Results</title>
   

  </head>
  <body>
    <div class="contain">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="crad">
                    <div class="card-header">
                        <h4 class="card-title">Enter your USN to view results</h4>        
                    </div>
                    <div class="card-body">
                        <div class="rew">
                            <div class="col-md-6">
                            <form action="" method="post">    
                                <div class="form-group">
                                    <input type="text" name="get_usn" class = "form-control" placeholder= "enter_usn" required>
                                </div>
                                <button type ="submit" name = "search_by_usn" class="btn btn-primary">Search</button>
                            </form>     
                            </div>
                        </div>
                        <?php
                        $connection = mysqli_connect("localhost","root","","student");
                        if(isset($_POST['search_by_usn']))
                        {
                            $id = $_POST['get_usn'];
                            $query = "SELECT * FROM result WHERE USN='$id' ";
                            $query_run = mysqli_query($connection, $query);

                            
                                   
                               
                        
                        
                        ?>
                        <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">#id</th>
                                <th scope="col">name</th>
                                <th scope="col">USN</th>
                                <th scope="col">semester</th>
                                <th scope="col">Subject1</th>
                                <th scope="col">Subject2</th>
                                <th scope="col">Subject3</th>
                                <th scope="col">Subject4</th>
                                <th scope="col">Subject5</th>
                                <th scope="col">Subject6</th>
                                <th scope="col">Subject7</th>
                                <th scope="col">Subject8</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if(mysqli_num_rows($query_run) > 0)
                                {
                                    while($row = mysqli_fetch_array( $query_run))
                                    {


                                ?>

                                <tr>
                                    <td><?php  echo $row['id']; ?></td>
                                    <td><?php  echo $row['name']; ?></td>
                                    <td><?php  echo $row['USN']; ?></td>
                                    <td><?php  echo $row['semester']; ?></td>
                                    <td><?php  echo $row['Subject1']; ?></td>
                                    <td><?php  echo $row['Subject2']; ?></td>
                                    <td><?php  echo $row['Subject3']; ?></td>
                                    <td><?php  echo $row['Subject4']; ?></td>
                                    <td><?php  echo $row['Subject5']; ?></td>
                                    <td><?php  echo $row['Subject6']; ?></td>
                                    <td><?php  echo $row['Subject7']; ?></td>
                                    <td><?php  echo $row['Subject8']; ?></td>
                                </tr>
                                <?php
                                   }
                                }
                                else
                                {
                                    echo "data not found";
                                }
                                ?>

                            </tbody>
                        </table>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
     

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>