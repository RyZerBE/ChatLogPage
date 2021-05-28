<?php if (!isset($chatlog)) return; ?>
<div class="text-mid log-info">
    <h4><i class="bi bi-flag-fill"> </i><?php echo $chatlog->reporter; ?></h4>
    <h4><i class="bi bi-geo-alt-fill"> </i><?php echo $chatlog->server; ?></h4>
    <h4><i class="bi bi-calendar-date-fill"> </i><?php echo $chatlog->date; ?></h4>
    <h4><i class="bi bi-chat-square-dots-fill"> </i><?php echo $chatlog->reason; ?></h4>
</div>
