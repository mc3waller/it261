<!-- 'action' echo = the form 'action' is found on this page -->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <fieldset>
        <label>First Name</label>
            <input type="text" name="firstName" value="<?php
                if (isset($_POST['firstName'])) echo htmlspecialchars($_POST['firstName']); ?>"> 
                <!-- If the end user has typed a first name, use that name -->
                <span class="formError"><?php echo $firstNameErr; ?></span>

        <label>Last Name</label>
            <input type="text" name="lastName" value="<?php
                if (isset($_POST['lastName'])) echo htmlspecialchars($_POST['lastName']); ?>"> 
                <!-- If the end user has typed a last name, use that name -->
                <span class="formError"><?php echo $lastNameErr; ?></span>

        <label>Email</label>
            <input type="text" name="email" value="<?php
                if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>"> 
                <!-- If the end user has typed an email, use that email -->
                <span class="formError"><?php echo $emailErr; ?></span>

        <label>Phone</label>
            <input type="text" name="phone" placeholder="xxx-xxx-xxxx" value="<?php
                if (isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']); ?>"> 
                <!-- If the end user has typed a phone number, use that phone number -->
                <span class="formError"><?php echo $phoneErr; ?></span>

        <label>Sign-Up for Newsletter?</label>
            <ul>
                <li><input type="radio" name="newsletter" value="Yes"
                    <?php if (isset($_POST['newsletter']) && $_POST['newsletter'] == 'Yes') echo 'checked="checked"'; ?>
                        > Yes</li>
                <li><input type="radio" name="newsletter" value="No"
                    <?php if (isset($_POST['newsletter']) && $_POST['newsletter'] == 'No') echo 'checked="checked"'; ?>
                        > No</li>
            </ul>
                <span class="formError"><?php echo $newsletterErr; ?></span>

        <label>Preferred Platform(s)</label>
            <ul>
                <!-- Radio buttons and check boxes are very similar -->
                <li><input type="checkbox" name="platforms[]" value="PC"
                    <?php if (isset($_POST['platforms']) && $_POST['platforms'] == 'PC') echo 'checked="checked"'; ?>
                        > PC</li>
                <li><input type="checkbox" name="platforms[]" value="Nintendo"
                    <?php if (isset($_POST['platforms']) && $_POST['platforms'] == 'Nintendo') echo 'checked="checked"'; ?>
                        > Nintendo</li>
                <li><input type="checkbox" name="platforms[]" value="PlayStation"
                    <?php if (isset($_POST['platforms']) && $_POST['platforms'] == 'PlayStation') echo 'checked="checked"'; ?>
                        > PlayStation</li>
                <li><input type="checkbox" name="platforms[]" value="Xbox"
                    <?php if (isset($_POST['platforms']) && $_POST['platforms'] == 'Xbox') echo 'checked="checked"'; ?>
                        > Xbox</li>
                <li><input type="checkbox" name="platforms[]" value="Mobile"
                    <?php if (isset($_POST['platforms']) && $_POST['platforms'] == 'Mobile') echo 'checked="checked"'; ?>
                        > Mobile</li>
                <li><input type="checkbox" name="platforms[]" value="Other"
                    <?php if (isset($_POST['platforms']) && $_POST['platforms'] == 'Other') echo 'checked="checked"'; ?>
                        > Other</li>
            </ul>
                <span class="formError"><?php echo $platformsErr; ?></span>

            <label>How did you hear about us?</label>
            
            <select name="source">
                <option value=""
                <?php if(isset($_POST['source']) && $_POST == 'NULL') {
                    echo 'selected = "unselected"';
                } ?>
                    >Select one</option>
                    
                <option value="Search result"
                <?php if(isset($_POST['source']) && $_POST['source'] == '"Search result') {
                    echo 'selected = "selected"';
                } ?>
                    >Search reuslt</option> 
                
                <option value="Another site"
                <?php if(isset($_POST['source']) && $_POST['source'] == 'Another site') {
                    echo 'selected = "selected"';
                } ?>
                    >Another site</option> 
                
                <option value="Friend or family"
                <?php if(isset($_POST['source']) && $_POST['source'] == 'Friend or family') {
                    echo 'selected = "selected"';
                } ?>
                    >Friend or family</option> 
                
                <option value="Other"
                <?php if(isset($_POST['source']) && $_POST['source'] == 'Other') {
                    echo 'selected = "selected"';
                } ?>
                    >Other</option>
            </select>
            <span class="formError"><?php echo $sourceErr; ?></span>

        <label>Comments</label>
            <textarea name="comments"><?php if (isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']); ?></textarea>
                <span class="formError"><?php echo $commentsErr; ?></span>

        <input type="radio" name="privacy" value="yes"<?php
            if(isset($_POST['privacy']) && $_POST['privacy'] == 'yes') echo 'checked="checked"' ; ?>>
            I agree to your Privacy Policy
            <span class="formError"><?php echo $privacyErr; ?></span>

        <input id="submit" type="submit" value="Send">
        <p><a href="">Reset</a></p>
    </fieldset>
</form>