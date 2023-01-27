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

<!-- view for displaying poll question and options -->
<h1><?php echo $polls; ?></h1>
<form action="<?php echo base_url('poll/vote'); ?>" method="post">
    <?php foreach ($polls as $option) : ?>
        <input type="radio" name="option" value="<?php echo $option['id']; ?>">
        <label><?php echo $option['question']; ?></label><br>
    <?php endforeach; ?>
    <input type="submit" value="Vote">
</form>
