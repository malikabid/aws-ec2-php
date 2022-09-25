<?php

echo "Please fill in the below details to get connected";

?>

<H1>Contact Us</H1>
<form action="">
    <table>
        <tr>
            <td><label for="firstname">Enter your Firstname</label>: </td>
            <td><input type="text" name="firstname" id="fname" /></td>
        </tr>
        <tr>
            <td><label for="lastname">Enter your Lastname</label>:</td>
            <td><input type="text" name="lastname" id="lname" /></td>
        </tr>
        <tr>
            <td><label for="email">Enter your Email</label>:</td>
            <td><input type="email" name="email" id="email" /></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Submit" />
            </td>
        </tr>
    </table>
    
</form>