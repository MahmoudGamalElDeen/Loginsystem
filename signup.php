<?php
    include_once 'header.php'
?>

    <section class="main-container">
        <div class="main-wrapper">
            <h2>Sign Up</h2>
            <form class="signup-form" action="includes/signup.inc.php" method="POST">
            	<input type="text" name="first" placeholder="Firstname">
            	<input type="text" name="last" placeholder="Lastname">
            	<input type="email" name="email" placeholder="E-mail">
            	<input type="password" name="password" placeholder="Password">
            	<button type="Submit" name="submit" placeholder="Submit">Sign up</button>
            </form>
        </div>
    </section>

<?php
    include_once 'footer.php'
?>
