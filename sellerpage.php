<!doctype html>
<html>
<head>
    <?php
    $con = mysqli_connect("localhost","root","root","campus_cart");
    if (mysqli_connect_errno()) echo "Failed to connect to MySQL: " . mysqli_connect_error();

    if(isset($_POST['but_upload'])){
        $name = $_FILES['file']['name'];

        $target_file = basename($_FILES["file"]["name"]);

        // Select file type
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Valid file extensions
        $extensions_arr = array("jpg","jpeg","png","gif");

        // Check extension
        if( in_array($imageFileType,$extensions_arr) ){

            // Convert to base64
            $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
            $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;

            // Insert record
            $query = "insert into images(name,image) values('".$name."','".$image."')";

            mysqli_query($con,$query) or die(mysqli_error($con));

            // Upload file
            move_uploaded_file($_FILES['file']['tmp_name'],'upload/'.$name);

        }



    }
    $sql = "INSERT INTO productinfo set itemname = '$_POST[itemname]',

    itemprice = '$_POST[itemprice]'";

    // Insert SQL data in MySQL database table
    mysqli_query($con, $sql) ;
    echo "Your new product has been added. <br>";
    ?>
<body>
    <form method="post" action="" enctype='multipart/form-data'>
      <fieldset>

         <legend>Details</legend>


         <p>
           <label>Item Name: </label>
           <input type="text" name="itemname" />
         </p>
         <p>
           <label>Item Price: </label>
           <input type="text" name="itemprice" />
         </p>
         <p>
           <label>Item Photo: </label>
           <input type='file' name='file' />
        </p>
        <input type='submit' value='Post' name='but_upload'/>
      </fieldset>

    </form>

</body>
</html>
