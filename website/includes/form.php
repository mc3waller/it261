<!-- 'action' echo = the form 'action' is found on this page -->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <fieldset>
        <label>First Name</label>
            <input type="text" name="firstName" value="<?php
                if (isset($_POST['firstName'])) echo htmlspecialchars($_POST['firstName']); ?>"> 
                <!-- If the end user has typed a first name, use that name -->
                <span><?php echo $firstNameErr; ?></span>

        <label>Last Name</label>
            <input type="text" name="lastName" value="<?php
                if (isset($_POST['lastName'])) echo htmlspecialchars($_POST['lastName']); ?>"> 
                <!-- If the end user has typed a last name, use that name -->
                <span><?php echo $lastNameErr; ?></span>

        <label>Email</label>
            <input type="text" name="email" value="<?php
                if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>"> 
                <!-- If the end user has typed an email, use that email -->
                <span><?php echo $emailErr; ?></span>

        <label>Phone</label>
            <input type="text" name="phone" placeholder="xxx-xxx-xxxx" value="<?php
                if (isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']); ?>"> 
                <!-- If the end user has typed a phone number, use that phone number -->
                <span><?php echo $phoneErr; ?></span>

        <label>Sign-Up for Newsletter?</label>
            <ul>
                <li><input type="radio" name="newsletter" value="Yes"
                    <?php if (isset($_POST['newsletter']) && $_POST['newsletter'] == 'Yes') echo 'checked="checked"'; ?>
                        >Yes</li>
                <li><input type="radio" name="newsletter" value="No"
                    <?php if (isset($_POST['newsletter']) && $_POST['newsletter'] == 'No') echo 'checked="checked"'; ?>
                        >No</li>
            </ul>
                <span><?php echo $newsletterErr; ?></span>

        <label>Favorite Donuts</label>
            <ul>
                <!-- Radio buttons and check boxes are very similar -->
                <li><input type="checkbox" name="donuts[]" value="Plain"
                    <?php if (isset($_POST['donuts']) && $_POST['donuts'] == 'Plain') echo 'checked="checked"'; ?>
                        >Plain</li>
                <li><input type="checkbox" name="donuts[]" value="Sugar"
                    <?php if (isset($_POST['donuts']) && $_POST['donuts'] == 'Sugar') echo 'checked="checked"'; ?>
                        >Sugar</li>
                <li><input type="checkbox" name="donuts[]" value="Glazed"
                    <?php if (isset($_POST['donuts']) && $_POST['donuts'] == 'Glazed') echo 'checked="checked"'; ?>
                        >Glazed</li>
                <li><input type="checkbox" name="donuts[]" value="Chocolate"
                    <?php if (isset($_POST['donuts']) && $_POST['donuts'] == 'Chocolate') echo 'checked="checked"'; ?>
                        >Chocolate</li>
                <li><input type="checkbox" name="donuts[]" value="Powdered"
                    <?php if (isset($_POST['donuts']) && $_POST['donuts'] == 'Powdered') echo 'checked="checked"'; ?>
                        >Powdered</li>
                <li><input type="checkbox" name="donuts[]" value="Cream-Filled"
                    <?php if (isset($_POST['donuts']) && $_POST['donuts'] == 'Cream-Filled') echo 'checked="checked"'; ?>
                        >Cream-Filled</li>
                <li><input type="checkbox" name="donuts[]" value="Apple Fritter"
                    <?php if (isset($_POST['donuts']) && $_POST['donuts'] == 'Apple Fritter') echo 'checked="checked"'; ?>
                        >Apple Fritter</li>
            </ul>
                <span><?php echo $donutsErr; ?></span>

        <label>Comments</label>
            <textarea name="comments"><?php if (isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']); ?></textarea>
                <span><?php echo $commentsErr; ?></span>

        <input type="radio" name="privacy" value="yes"<?php
            if(isset($_POST['privacy']) && $_POST['privacy'] == 'yes') echo 'checked="checked"' ; ?>>
            I agree to your Privacy Policy
            <span><?php echo $privacyErr; ?></span>

        <input type="submit" value="Send">
        <p><a href="">Reset</a></p>
    </fieldset>
</form>