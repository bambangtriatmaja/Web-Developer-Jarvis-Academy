<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form-Sign-Up</title>
  </head>
  <body>
    <!-- Judul/Heading -->
    <h1>Buat Account Baru!</h1>
    <h4>Sign Up Form</h4>

    <!-- Form Biodata -->
    <form action="/welcome" method="POST">

      <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
      
      <label for="first-name">First Name :</label><br />
      <input type="text" name="firstname" /> <br />
      <label for="last-name">Last Name : </label> <br />
      <input type="text" name="lastname"/>

      <br /><br />

      <label for="gender">Gender : </label> <br />
      <input type="radio" name="Male" id="1" />
      <label for="male">Male</label> <br />
      <input type="radio" name="Female" id="2" />
      <label for="female">Female</label> <br />
      <input type="radio" name="Other" id="3" />
      <label for="other">Other</label> <br /><br />

      <label for="nationality">Nationality</label><br />
      <select name="nationality" id="nationality">
        <option value="indonesian">Indonesian</option>
        <option value="malaysian">Malaysian</option>
        <option value="vietnam">Vietnam</option>
        <option value="thailand">Thailand</option>
      </select>

      <br /><br />

      <label for="language-spoken">Language Spoken : </label><br />
      <input type="checkbox" name="spoken-1" id="spoken1" />
      <label for="spoken-1">I have a bike</label> <br />
      <input type="checkbox" name="spoken-2" id="spoken2" />
      <label for="spoken-1">I have a car</label><br />
      <input type="checkbox" name="spoken-3" id="spoken3" />
      <label for="spoken-1">I have a boat</label>

      <br /><br />

      <label for="bio">Bio :</label><br />
      <textarea name="message" rows="10" cols="30"></textarea>
      <br />
      <input type="submit" value="Sign Up" />
    </form>
  </body>
</html>
