<!DOCTYPE html>
<html>
<head>
<title>Meek Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    position: relative;
    margin: 0 auto;
    background: #fff;
    font-family: Verdana,Arial,Helvetica,sans-serif;
    font-size: 12px;
    color: #333;
}

input:required:invalid, input:focus:invalid, textarea:required:invalid, textarea:focus:invalid {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAYAAABWdVznAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAT1JREFUeNpi/P//PwMpgImBRMACY/x7/uDX39sXt/67cMoDyOVgMjBjYFbV/8kkqcCBrIER5KS/967s+rmkXxzI5wJiRSBm/v8P7NTfHHFFl5mVdIzhGv4+u///x+xmuAlcdXPB9KeqeLgYd3bDU2ZpRRmwH4DOeAI07QXIRKipYPD35184/nn17CO4p/+cOfjl76+/X4GYAYThGn7/g+Mfh/ZZwjUA/aABpJVhpv6+dQUjZP78Z0YEK7OezS2gwltg64GmfTu6i+HL+mUMP34wgvGvL78ZOEysf8M1sGgZvQIqfA1SDAL8iUUMPIFRQLf+AmMQ4DQ0vYYSrL9vXDz2sq9LFsiX4dLRA0t8OX0SHKzi5bXf2HUMBVA0gN356N7p7xdOS3w5fAgcfNxWtn+BJi9gVVBOQfYPQIABABvRq3BwGT3OAAAAAElFTkSuQmCC);
    background-position: right top;
    background-repeat: no-repeat;
    box-shadow: none;
}

fieldset input, fieldset textarea, fieldset select {
    padding: 2px 4px;
    border: 1px solid #ccc;
    border-radius: 2px;
    background: #fff;
    line-height: 1.1;
    font-family: inherit;
    font-size: 1.1em;
}

fieldset {
    border: 2px solid #e0d8b7;
    background: #fcfaf0;
    color: #000;
}


input:required:valid, textarea:required:valid {
    background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAYAAABWdVznAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAZZJREFUeNpi/P//PwMpgImBRMAy58QshrNPTzP8+vOLIUInisFQyYjhz98/DB9/fmT48/+35v7H+8KNhE2+WclZd+G0gZmJmYGThUNz1fUVMZtvbWT59eUXG9wGZIWMUPj993eJ5VeWxuy8veM/CzPL3yfvH/9H0QBSBDYZyOVm4mGYfn6q4cory5lYmFh+MrEwM/76/YsR7mk2ZjbWP///WP37/y8cqIDhx58fjvtu7XV6//ndT34G/v8FasUsDjKO/+A2PP3wpGLd+TVsfOz8XH6KAT+nHpokcu7h6d9q/BoMxToVbBYqlt9///+1GO4/WVdpXqY/zMqXn13/+vTjI9mj94/y//v9/3e9ZRObvYbDT0Y2xnm///x+wsfHB3GSGLf41jb3rv0O8nbcR66d+HPvxf2/+YZFTHaqjl8YWBnm/vv37yly5LL8+vuLgYuVa3uf/4T/Kd8SnSTZpb6FGUXwcvJxbAPKP2VkZESNOBDx8+9PBm4OwR1TwmYwcfzjsBUQFLjOxs52A2YyKysrXANAgAEA7buhysQuIREAAAAASUVORK5CYII=);
    background-position: right top;
    background-repeat: no-repeat;
}

input {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
}

input[type=submit] {
  background-color: #008CBA;
  color: white;
}

.container {
  background-color: #f1f1f1;
  padding: 20px;
}

#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -5px;
  content: "âœ”";
}

.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -5px;
  content: "âœ–";
}

.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button2 {
  background-color: white;
  color: black;
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}

.grid-container {
  --grid-layout-gap: 10px;
  --grid-column-count: 3;
  --grid-item--min-width: 100px;

  --gap-count: calc(var(--grid-column-count) - 1);
  --total-gap-width: calc(var(--gap-count) * var(--grid-layout-gap));
  --grid-item--max-width: calc((100% - var(--total-gap-width)) / var(--grid-column-count));

  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(max(var(--grid-item--min-width), var(--grid-item--max-width)), 1fr));
  grid-gap: var(--grid-layout-gap);
}
.grid-container2 {
  --grid-layout-gap: 10px;
  --grid-column-count: 2;
  --grid-item--min-width: 100px;

  --gap-count: calc(var(--grid-column-count) - 1);
  --total-gap-width: calc(var(--gap-count) * var(--grid-layout-gap));
  --grid-item--max-width: calc((100% - var(--total-gap-width)) / var(--grid-column-count));

  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(max(var(--grid-item--min-width), var(--grid-item--max-width)), 1fr));
  grid-gap: var(--grid-layout-gap);
}

p {
  border-bottom: 2px solid red;
}

button {
  background: none;
  border: none;
  padding: 1em 1.5em;
  font-size: .875rem;
  color: #636269;
  font-family: inherit;
  background-color: #e0e5ec;
  cursor: pointer;

  &:hover {
    background-color: darken(#e0e5ec, 2%);
  }
}

</style>
</head>
<body>
<p>Software section</p>
<div class="grid-container">
<div class="grid-item">
        <form method="post">
        <input type="submit" name="Zigbee"
        class="button button2" value="Zigbee" />
        </form> Update Zigbee<br>Current version : xxxx</div>
<div class="grid-item">
        <form method="post">
        <input type="submit" name="Ubuntu"
        class="button button2" value="Ubuntu" />
        </form>OS Update</div>
<div class="grid-item">
        <form method="post">
        <input type="submit" name="Windows"
        class="button button2" value="Windows" />
        </form></div>
<div class="grid-item">
        <form method="post">
        <input type="submit" name="System"
        class="button button2" value="System" />
        </form></div>
<div class="grid-item">
        <form method="post">
        <input type="submit" name="Dashticz"
        class="button button2" value="Dashticz" />
        </form></div>
<div class="grid-item">
        <form method="post">
        <input type="submit" name="Edit"
        class="button button2" value="Edit" />

</div>
</div>

<p>Credentials</p>

<div class="grid-container">
<div class="grid-item">
<h3>User Account</h3>
<form  method="post">
  <tr>
    <th>Username:</th>
    <th><input id="field_username" title="Username must be 5 characters long and contain only letters, numbers and underscores." type="text" required pattern="\w+.{4,}" name="username"></th>
  </tr>
 <tr>
    <th>Password:</th>
    <th><input id="field_pwd1" title="Password must contain at least 6 characters, including UPPER/lowercase and numbers." type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="pwd1"></th>
</tr>
<tr>
    <th>Confirm Password:</th>
    <th><input id="field_pwd2" title="Please enter the same Password as above." type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="pwd2"></th>
</tr>
<tr>
    <th><input type="submit" name="User" class="button button2" value="Submit" /></th>
</tr>
</form>

<script type="text/javascript">
  document.addEventListener("DOMContentLoaded", function() {
    var checkPassword = function(str)
    {
      var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
      return re.test(str);
    };
    var checkForm = function(e)
    {
      if(this.username.value.length < 5)  {
        alert("Error: Username must be 5 characters or longer!");
        this.username.focus();
        e.preventDefault();
        return;
      }
      re = /^\w+$/;
      if(!re.test(this.username.value)) {
        alert("Error: Username must contain only letters, numbers and underscores!");
        this.username.focus();
        e.preventDefault();
        return;
      }
      if(this.pwd1.value != "" && this.pwd1.value == this.pwd2.value) {
        if(!checkPassword(this.pwd1.value)) {
          alert("The password you have entered is not valid!");
          this.pwd1.focus();
          e.preventDefault();
          return;
        }
      } else {
        alert("Error: Please check that you've entered and confirmed your password!");
        this.pwd1.focus();
        e.preventDefault();
        return;
      }
      alert("Your new Username and Password are qued to be changed. Please note that within a minute, your not able to login with your old Username and Password!");
    };
    var myForm = document.getElementById("myForm");
    myForm.addEventListener("submit", checkForm, true);
    var supports_input_validity = function()
    {
      var i = document.createElement("input");
      return "setCustomValidity" in i;
    }

    if(supports_input_validity()) {
      var usernameInput = document.getElementById("field_username");
      usernameInput.setCustomValidity(usernameInput.title);

      var pwd1Input = document.getElementById("field_pwd1");
      pwd1Input.setCustomValidity(pwd1Input.title);

      var pwd2Input = document.getElementById("field_pwd2");
      usernameInput.addEventListener("keyup", function(e) {
        usernameInput.setCustomValidity(this.validity.patternMismatch ? usernameInput.title : "");
      }, false);

      pwd1Input.addEventListener("keyup", function(e) {
        this.setCustomValidity(this.validity.patternMismatch ? pwd1Input.title : "");
        if(this.checkValidity()) {
          pwd2Input.pattern = RegExp.escape(this.value);
          pwd2Input.setCustomValidity(pwd2Input.title);
        } else {
          pwd2Input.pattern = this.pattern;
          pwd2Input.setCustomValidity("");
        }
      }, false);

      pwd2Input.addEventListener("keyup", function(e) {
        this.setCustomValidity(this.validity.patternMismatch ? pwd2Input.title : "");
      }, false);

    }

  }, false);
</script>

<script type="text/javascript">
  if(!RegExp.escape) {
    RegExp.escape = function(s) {
      return String(s).replace(/[\\^$*+?.()|[\]{}]/g, '\\$&');
    };
  }
</script>
</div>

<div class="grid-item">
<h3>Admin Account</h3>
<form  method="post">
  <tr>
    <th>Username:</th>
    <th><input id="field_username" title="Username must be 5 characters long and contain only letters, numbers and underscores." type="text" required pattern="\w+.{4,}" name="username"></th>
  </tr>
 <tr>
    <th>Password:</th>
    <th><input id="field_pwd1" title="Password must contain at least 6 characters, including UPPER/lowercase and numbers." type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="pwd1"></th>
</tr>
<tr>
    <th>Confirm Password:</th>
    <th><input id="field_pwd2" title="Please enter the same Password as above." type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="pwd2"></th>
</tr>
<tr>
    <th><input type="submit" name="Admin" class="button button2" value="Submit" /></th>
</tr>
</form>

<script type="text/javascript">
  document.addEventListener("DOMContentLoaded", function() {
    var checkPassword = function(str)
    {
      var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
      return re.test(str);
    };
    var checkForm = function(e)
    {
      if(this.username.value.length < 5)  {
        alert("Error: Username must be 5 characters or longer!");
        this.username.focus();
        e.preventDefault();
        return;
      }
      re = /^\w+$/;
      if(!re.test(this.username.value)) {
        alert("Error: Username must contain only letters, numbers and underscores!");
        this.username.focus();
        e.preventDefault();
        return;
      }
      if(this.pwd1.value != "" && this.pwd1.value == this.pwd2.value) {
        if(!checkPassword(this.pwd1.value)) {
          alert("The password you have entered is not valid!");
          this.pwd1.focus();
          e.preventDefault();
          return;
        }
      } else {
        alert("Error: Please check that you've entered and confirmed your password!");
        this.pwd1.focus();
        e.preventDefault();
        return;
      }
      alert("Your new Username and Password are qued to be changed. Please note that within a minute, your not able to login with your old Username and Password!");
    };
    var myForm = document.getElementById("myForm");
    myForm.addEventListener("submit", checkForm, true);
    var supports_input_validity = function()
    {
      var i = document.createElement("input");
      return "setCustomValidity" in i;
    }

    if(supports_input_validity()) {
      var usernameInput = document.getElementById("field_username");
      usernameInput.setCustomValidity(usernameInput.title);

      var pwd1Input = document.getElementById("field_pwd1");
      pwd1Input.setCustomValidity(pwd1Input.title);

      var pwd2Input = document.getElementById("field_pwd2");
      usernameInput.addEventListener("keyup", function(e) {
        usernameInput.setCustomValidity(this.validity.patternMismatch ? usernameInput.title : "");
      }, false);

      pwd1Input.addEventListener("keyup", function(e) {
        this.setCustomValidity(this.validity.patternMismatch ? pwd1Input.title : "");
        if(this.checkValidity()) {
          pwd2Input.pattern = RegExp.escape(this.value);
          pwd2Input.setCustomValidity(pwd2Input.title);
        } else {
          pwd2Input.pattern = this.pattern;
          pwd2Input.setCustomValidity("");
        }
      }, false);

      pwd2Input.addEventListener("keyup", function(e) {
        this.setCustomValidity(this.validity.patternMismatch ? pwd2Input.title : "");
      }, false);

    }

  }, false);
</script>

<script type="text/javascript">
  if(!RegExp.escape) {
    RegExp.escape = function(s) {
      return String(s).replace(/[\\^$*+?.()|[\]{}]/g, '\\$&');
    };
  }
</script>
</div>

<div class="grid-item">
<h3>MQTT Credentials</h3>
<form  method="post">
  <tr>
    <th>Username:</th>
    <th><input id="field_username" title="Username must be 5 characters long and contain only letters, numbers and underscores." type="text" required pattern="\w+.{4,}" name="username"></th>
  </tr>
 <tr>
    <th>Password:</th>
    <th><input id="field_pwd1" title="Password must contain at least 6 characters, including UPPER/lowercase and numbers." type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="pwd1"></th>
</tr>
<tr>
    <th>Confirm Password:</th>
    <th><input id="field_pwd2" title="Please enter the same Password as above." type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="pwd2"></th>
</tr>
<tr>
    <th><input type="submit" name="MQTT" class="button button2" value="Submit" /></th>
</tr>
</form>

<script type="text/javascript">
  document.addEventListener("DOMContentLoaded", function() {
    var checkPassword = function(str)
    {
      var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
      return re.test(str);
    };
    var checkForm = function(e)
    {
      if(this.username.value.length < 5)  {
        alert("Error: Username must be 5 characters or longer!");
        this.username.focus();
        e.preventDefault();
        return;
      }
      re = /^\w+$/;
      if(!re.test(this.username.value)) {
        alert("Error: Username must contain only letters, numbers and underscores!");
        this.username.focus();
        e.preventDefault();
        return;
      }
      if(this.pwd1.value != "" && this.pwd1.value == this.pwd2.value) {
        if(!checkPassword(this.pwd1.value)) {
          alert("The password you have entered is not valid!");
          this.pwd1.focus();
          e.preventDefault();
          return;
        }
      } else {
        alert("Error: Please check that you've entered and confirmed your password!");
        this.pwd1.focus();
        e.preventDefault();
        return;
      }
      alert("Your new Username and Password are qued to be changed. Please note that within a minute, your not able to login with your old Username and Password!");
    };
    var myForm = document.getElementById("myForm");
    myForm.addEventListener("submit", checkForm, true);
    var supports_input_validity = function()
    {
      var i = document.createElement("input");
      return "setCustomValidity" in i;
    }

    if(supports_input_validity()) {
      var usernameInput = document.getElementById("field_username");
      usernameInput.setCustomValidity(usernameInput.title);

      var pwd1Input = document.getElementById("field_pwd1");
      pwd1Input.setCustomValidity(pwd1Input.title);

      var pwd2Input = document.getElementById("field_pwd2");
      usernameInput.addEventListener("keyup", function(e) {
        usernameInput.setCustomValidity(this.validity.patternMismatch ? usernameInput.title : "");
      }, false);

      pwd1Input.addEventListener("keyup", function(e) {
        this.setCustomValidity(this.validity.patternMismatch ? pwd1Input.title : "");
        if(this.checkValidity()) {
          pwd2Input.pattern = RegExp.escape(this.value);
          pwd2Input.setCustomValidity(pwd2Input.title);
        } else {
          pwd2Input.pattern = this.pattern;
          pwd2Input.setCustomValidity("");
        }
      }, false);

      pwd2Input.addEventListener("keyup", function(e) {
        this.setCustomValidity(this.validity.patternMismatch ? pwd2Input.title : "");
      }, false);

    }

  }, false);
</script>

<script type="text/javascript">
  if(!RegExp.escape) {
    RegExp.escape = function(s) {
      return String(s).replace(/[\\^$*+?.()|[\]{}]/g, '\\$&');
    };
  }
</script>
</div>

<?php
        if(array_key_exists('Zigbee', $_POST)) {
        echo "Zigbee update is initiaed, system reponce will be slower during update.";
        if (!file_exists('Zigbee')) {
        touch('Zigbee', strtotime('-1 days'));}
        }
else if(array_key_exists('Ubuntu', $_POST)) {
        echo "ubuntu update is initiaed, system reponce will be slower during update.";
        if (!file_exists('Ubuntu')) {
        touch('Ubuntu', strtotime('-1 days'));}
        }
else if(array_key_exists('Windows', $_POST)) {
        echo "Windows update is initiaed, system reponce will be slower during update.";
        if (!file_exists('Windows')) {
        touch('Windows', strtotime('-1 days'));}
        if (!file_exists('Windows')) {
        touch('Windows', strtotime('-1 days'));}
        }
else if(array_key_exists('System', $_POST)) {
        echo "System update is initiaed, system reponce will be slower during update.";
        if (!file_exists('System')) {
        touch('System', strtotime('-1 days'));}
        }
else if(array_key_exists('Dashticz', $_POST)) {
        echo "Dashticz update is initiaed, system reponce will be slower during update.";
        if (!file_exists('Dashticz')) {
        touch('Dashticz', strtotime('-1 days'));}
        }
else if(array_key_exists('Edit', $_POST)) {
        echo "Edit update is initiaed, system reponce will be slower during update.";
        if (!file_exists('Edit')) {
        touch('Edit', strtotime('-1 days'));}
        }
else if(array_key_exists('User', $_POST)) {
	$Name = "Username:".$_POST['username']."";
        $Pass = "Password:".$_POST['pwd2']."";
        $data = $_POST['username']. PHP_EOL .$_POST['pwd2']. PHP_EOL;
        $file=fopen("cup", "w");
        fwrite($file, $data);
        fclose($file);
	echo "User Account login details are updated.";
	$username = NULL;
	$pwd2 = NULL;
        }
else if(array_key_exists('Admin', $_POST)) {
        $Name = "Username:".$_POST['username']."";
        $Pass = "Password:".$_POST['pwd2']."";
        $data = $_POST['username']. PHP_EOL .$_POST['pwd2']. PHP_EOL;
        $file=fopen("cap", "w");
        fwrite($file, $data);
        fclose($file);
        echo "Admin Account login details are updated.";
        $username = NULL;
        $pwd2 = NULL;
        }
else if(array_key_exists('MQTT', $_POST)) {
        $Name = "Username:".$_POST['username']."";
        $Pass = "Password:".$_POST['pwd2']."";
        $data = $_POST['username']. PHP_EOL .$_POST['pwd2']. PHP_EOL;
        $file=fopen("cmqtp", "w");
        fwrite($file, $data);
        fclose($file);
        echo "MQTT Credentials are updated.";
        $username = NULL;
        $pwd2 = NULL;
        }
?>
</div>

<p>OpenVPN Section</p>

</body>
</html>
