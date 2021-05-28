<?php use chatlog\ChatlogManager;

if (!isset($chatlog)) return; ?>
<form class="chatlog">
<?php

foreach (ChatlogManager::convertToArray($chatlog->messages) as $message) {
    ?>
    <div class="mb-3 input-group">
      <input class="form-control" type="text" placeholder="<?php echo $message; ?>"
        aria-label="Disabled input" disabled>
    </div>
    <?php
}
?>

</form>