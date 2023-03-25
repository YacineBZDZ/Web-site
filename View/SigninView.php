<?php
require_once('../style.php');
require_once('../Controller/SigninController.php');
class signinview {
    public function showForm() {
        echo '
        <section class="form-container">
            <form method="POST" action="">
            <label for="nom">Last name :</label>
            <input type="text" name="nom" class="box" placeholder="enter your Last name" required><br><br>
            <label for="prenom">First name :</label>
            <input type="text" name="prenom" class="box" placeholder="enter your First name"  required><br><br>
            <label for="email">Email :</label>
            <input type="email" name="email" class="box" placeholder="enter your email"  required><br><br>
            <label for="password">Password :</label>
            <input type="password" name="password" class="box" placeholder="enter your Password"  required><br><br>
            <label for="category_formation">Formation Category :</label>
            <input type="text" name="category_formation" class="box" placeholder="enter your Formation Category"  >  <br><br>
            <label for="name_uni">Name of the Institue :</label>
            <input type="text" name="name_uni" class="box" placeholder="enter the Name of the Institue" >   <br><br>
            <label for="type_user"> User Type :</label>
            <select name="type_user" class="box" ><option value="1">Administrator</option><option value="2">Head of promotion</option><option value="3">Student</option><</select> <br><br>
            <input type="submit" name="submit" class="btn"  value="register now" >
             <p>already have an account? <a href="../login1.php">login now</a></p>
        </form>
        ';
    }
    
    public function showMessage($message) {
        echo $message;
    }}
?>
