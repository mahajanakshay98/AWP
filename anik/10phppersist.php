<html>
  <head>
    <title>
      Persisting user data
    </title>
  </head>

  <body>
    <h1>Persisting user data</h1>
    <?php
      $errors_array = array();

      if(isset($_REQUEST["welcome_already_seen"])){
        check_data();
        if(count($errors_array) != 0){
          show_errors();
          show_welcome();
        } else {
          handle_data();
        }
      } 
      else {
        show_welcome();
      }

      function check_data()
      {
        global $errors_array;

        if($_REQUEST["first"] == "") {
        $errors_array[] = "<font color='red'>Enter your first name</font>";
        }
        if($_REQUEST["last"] == "") {
        $errors_array[] = "<font color='red'>Enter your last name</font>";
        }
      }

      function show_errors()
      {
        global $errors_array;

        foreach ($errors_array as $err){
          echo $err, "<br>";
        }
      }

      function handle_data()
      {
        echo "Here is your first name: ";
        echo $_REQUEST["first"];
        echo "<br>Here is your first name: ";
        echo $_REQUEST["last"];
      }

      function show_welcome()
      {
        $first_name = isset($_REQUEST["first"]) ? $_REQUEST["first"] : "";
        $last_name = isset($_REQUEST["last"]) ? $_REQUEST["last"] : "";
        echo "<form method='post'>";
        echo "Enter your first name: ";
        echo "<input name='first' type='text' value='", $first_name, "'>";
        echo "<br>";
        echo "<br>";
        echo "Enter your last name: ";
        echo "<input name='last' type='text' value='", $last_name, "'>";
        echo "<br>";
        echo "<br>";
        echo "<input type='submit' value='Submit'>";
        echo "<input type=hidden name='welcome_already_seen' 
          value='already_seen'>";
        echo "</form>";
      }
    ?>
  </body>
</html>
