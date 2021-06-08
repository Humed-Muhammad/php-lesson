<?php
$pattern = "/^[a-zA-Z-' ]*$/";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    empty($_POST['name']) ? $nameErr = 'Name is required!' : $name = test_input($_POST['name']);

    if (!preg_match($pattern, $name)) {
        $nameErr = "Only letters and white space allowed";
        $name = '';
    }

    empty($_POST['email']) ? $emailErr = 'Email is required!' : $email = test_input($_POST['email']);

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $emailErr = 'Invalid email format.';
        $email='';
    }

    empty($_POST['website']) ? $websiteErr = '' : $website = test_input($_POST['website']);

    empty($_POST['comment']) ? $commentErr = '' : $comment = test_input($_POST['comment']);

    empty($_POST['gender']) ? $genderErr = 'Gender is required!' : $gender = test_input($_POST['gender']);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form-validation</title>
    <style>
        body {
            background-color: rgb(126, 126, 126);
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100vh;
            font-family: sans-serif;
}
form {
  height: 60%;
  width: 50%;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  align-items: center;
  background-color: teal;
  color: rgb(255, 255, 255);
  border-radius: 5px;
}
input,
textarea {
  padding: 7px;
  border-radius: 5px;
  border: none;
  background-color: white;
  outline: none;
  margin: 5px;
}
span {
  color: rgb(0, 55, 9);
  font-size: 12px;
}
.submit {
  cursor: pointer;
}

div {
  width: 200px;
  height: 150px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

    </style>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <div>
            Name: <input type="text" name="name" id=""> <span class='error' >* <?php echo $nameErr ?> </span>
        </div>
        <div>
            Email: <input type="text" name="email" id=""> <span class='error' >* <?php echo $emailErr ?> </span>
        </div>
        <div>
            Website: <input type="text" name="website" id=""> <span class='error' > <?php echo $websiteErr ?> </span>
        </div>
        <div>
            Comment: <textarea placeholder='Comment here...' name="comment" id="" cols="30" rows="10"></textarea>
        </div>
        <main>
            Gender: <input type="radio" name="gender" value='female'> Female
            <input type="radio" name="gender" value='male'>Male
            <input type="radio" name="gender" value='other'>Other

             <span class='error' >* <?php echo $genderErr ?> </span>
        </main>
        <input class='submit' type="submit" value="Submit">
    </form>

    <p>
    <?php

echo "<h1> Your Inputs </h1>";
echo $name . '<br>';
echo $email . '<br>';
echo $website . '<br>';
echo $comment . '<br>';
echo $gender . '<br>';

?>
    </p>
</body>
</html>-