<body>
  <br />
  <div class="container">
   <h3>Employee Benefit Package Calculator</h3>
   <br />
   <br />
   <form method="POST" id="information_form" class="form" action="calculate.php">
        <h4>Enter Employee Information</h4>
        <input type="text" placeholder="employee first name" id="efirstname" name="efirstname" maxlength="50" value="<?= $_SESSION['presets']['efirstname'] ?>" required>
        <span id="efirstnameError" class="error"></span>
        <?php if (isset($_SESSION['errors']['efirstname'])) { ?>
        <span id="efirstnameError" class="error"><?=$_SESSION['errors']['efirstname'] ?></span>
        <?php } ?>

        <input type="text" placeholder="employee last name" id="elastname" name="elastname" maxlength="50" value="<?= $_SESSION['presets']['elastname'] ?>" required>
        <span id="elastnameError" class="error"></span>
        <?php if (isset($_SESSION['errors']['elastname'])) { ?>
        <span id="elastnameError" class="error"><?= $_SESSION['errors']['elastname'] ?></span>
        <?php } ?>

        <h4>Enter Dependent Information</h4>
        <input type="text" placeholder="number of dependents" id="numberdependents" name="numberdependents" maxlength="50" value="<?= $_SESSION['presets']['numberdependents'] ?>" required>
        <span id="numberdependents" class="error"></span>
        <?php if (isset($_SESSION['errors']['numberdependents'])) { ?>

        <span id="numberdependentsError" class="error"><?= $_SESSION['errors']['numberdependents'] ?></span>
        <?php } ?>
        <input type="text" placeholder="number of dependents starting with 'A'" id="aname" name="aname" maxlength="50" value="<?= $_SESSION['presets']['aname'] ?>" required>
        <span id="anameError" class="error"></span>
        <?php if (isset($_SESSION['errors']['aname'])) { ?>
        <span id="anameError" class="error"><?= $_SESSION['errors']['aname'] ?></span>
        <?php } ?>

        <br />
        <br />
        <button id="register-button" type="submit">Calculate</button>
   </form>
  </div>