<h1>Polls</h1>
<!-- loop through the polls to display them -->
<ul>
    <?php foreach ($polls as $poll): ?>
        <li>
            <a href="<?php echo base_url('poll/view/'.$poll['id']); ?>">
                <?php echo $poll['question']; ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>
