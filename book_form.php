<?php $connectoin = mysqli_connect('localhost', 'root', '', 'travel_db');
if (isset($_POST['sent'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gestcount = $_POST['gestCount'];
    $location = $_POST['location'];
    $arrivals = $_POST['arrival'];
    $leaving = $_POST['leaving'];
    $request = "insert into tbl_bookform( usr_name, email,phone, whereto, num_of_member, arrivals, leaving) VALUES ('$name','$email','$phone' ,'$location','$gestcount','$arrivals','$leaving' )"
    ;
    mysqli_query($connectoin, $request);
    header('location:book.php');
} else {
    echo 'somthing went wrong try again';
}

?>