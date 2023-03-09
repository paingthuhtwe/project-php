<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5 border bg-white rounded p-3" style="max-width: 600px">
        <?php if(file_exists("_actions/photos/profile.jpg")) :?>
            <div class="d-flex mb-2">
                <img src="_actions/photos/profile.jpg" alt="" class="img-thumbnail w-25">
            </div>
        <?php endif ?>

        <form action="_actions/upload.php" method="post" enctype="multipart/form-data">
            <div class="input-group">
                <input type="file" name="photo" class="form-control">
                <button class="btn btn-secondary" type="submit">Upload</button>
            </div>   
        </form>
        <table class="table mt-2 table-striped table-bordered">
            <tr>
                <th colspan="2" class="text-center py-3">
                    Personal Information
                </th>
            </tr>
            <tr>
                <td>Name</td>
                <td>Paing Thu Htwe</td>
            </tr>
            <tr>
                <td>Father's Name</td>
                <td>U Yae Chan</td>
            </tr>
            <tr>
                <td>Date Of Birth</td>
                <td>06/07/2004</td>
            </tr>
            <tr>
                <td>Age</td>
                <td>19</td>
            </tr>
            <tr>
                <td>NRC No.</td>
                <td>8/YaSaKa(N)255979</td>
            </tr>
            <tr>
                <td>Nationality</td>
                <td>Myanmar</td>
            </tr>
            <tr>
                <td>Religion</td>
                <td>Buddha</td>
            </tr>
            <tr>
                <td>Marital Status</td>
                <td>Single</td>
            </tr>
            <tr>
                <td>Height</td>
                <td>5' 6"</td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>+959 780 909 574</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>paingthuhtwe.official@gmail.com</td>
            </tr>
            <tr>
                <td>Address</td>
                <td>No.7 Street, Kamayut Tsp, Yangon.</td>
            </tr>
        </table>
    </div>
</body>
</html>