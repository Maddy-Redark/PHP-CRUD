<?php
$insert = false;
$update = false;


include 'config.php';

$viewData = $_REQUEST["viewData"];


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if(isset($_POST['fileEdit'])){
      $file = $_POST["fileEdit"];
      $description = $_POST["descriptionEdit"];

      $sql = "UPDATE `image` SET `filename` = '$file', `details` = '$description' WHERE `filename` = '$viewData'";
      $result = mysqli_query($conn, $sql);
      if($result) {
        $update = true;
      }
    }
    else{
      $title = $_POST["title"];
      $description = $_POST["description"];

      $sql = "INSERT INTO `image` (`filename`, `details`) VALUES ('$file', '$description')";
      $result = mysqli_query($conn, $sql);

      if($result) {
        $insert = true;
      }
    }
  }


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> 

    <title>Notome</title>
  </head>
  <body>

    <!-- Button trigger modal -->
      <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal">
        Edit modal
      </button> -->

      <!-- Modal -->
      <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="editModalLabel">Edit details: </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="/updateAction.php" method="POST">
                <div class="form-group">
                  <label for="title">Image</label>
                  <input type="text" class="form-control" id="fileEdit" name="fileEdit" aria-describedby="emailHelp">
                  <input class="form-control" type="file" name="fileEdit" value="" />
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="descriptionEdit" name="descriptionEdit" rows="3"></textarea>
                  </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>



      
    <script>
      edits = document.getElementsByClassName('edit');
      Array.from(edits).forEach((element)=>{
        element.addEventListener("click", (e)=>{
          console.log("edit ", );
          title = "";
          description = "";
          titleEdit.value = title;
          descriptionEdit.value = description;
          $('#editModal').modal('toggle');
        })
      })
      </script>


    </html>