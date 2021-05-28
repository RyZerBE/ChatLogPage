<!DOCTYPE html>
<html lang="de">

<head>
<title>RyZerBE Chatlog</title>
<?php use chatlog\ChatlogManager;

include("./assets/items/header.php");?>
</head>

<body>
    <?php
        if (!isset($_POST["id"])) {
            header("Location:index.php");
            return;
        }
        require "src/chatlog/ChatlogManager.php";
        $manager = new ChatlogManager();
        $chatlog = $manager->getChatlog($_POST["id"]);
        if ($chatlog === null) {
            // todo: make a not found page
            header("Location:index.php");
            return;
        }
    ?>
  <div class="container content">
      <h1 class="text-mid">Chatlog | <?php echo $chatlog->victim; ?></h1>
      <?php include("./assets/items/face-display.php");?>
      <?php include("./assets/items/log-info.php");?>
      <?php include("./assets/items/chatlog.php");?>
      <?php include("./assets/items/socialmedia.php");?>
   
  </div>
</body>

</html>