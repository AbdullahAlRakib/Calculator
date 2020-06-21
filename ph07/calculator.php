<?php
    require_once './Calc.php';
    use App\classes\Calc;

    $result='';
    if(isset($_POST['btn'])){
    $a=new Calc();
    $result=$a->mainCalculation();
    }
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<div class="main-section">
    <div class="container">


    <div class="row">

        <div class="col-md-12 text-center py-5">
            <form action="" method="post">
                <table>
                    <tr>
                        <th>First Number</th>
                        <td><input type="number" name="first_number"/></td>
                    </tr>
                    <tr>
                        <th>Second Number</th>
                        <td><input type="number" name="second_number"/></td>
                    </tr>
                    <tr>
                        <th>Result</th>
                        <td><input type="text" value="<?php echo $result; ?>"/></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>
                            <input type="submit" name="btn" value="+"/>
                            <input type="submit" name="btn" value="-"/>
                            <input type="submit" name="btn" value="*"/>
                            <input type="submit" name="btn" value="/"/>
                            <input type="submit" name="btn" value="%"/>


                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    </div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>