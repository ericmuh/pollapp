<!-- view for displaying poll question and options -->
<h1><?php echo $poll_question; ?></h1>
<form action="<?php echo base_url('poll/vote'); ?>" method="post">
    <?php foreach ($poll_options as $option) : ?>
        <input type="radio" name="option" value="<?php echo $option['id']; ?>">
        <label><?php echo $option['name']; ?></label><br>
    <?php endforeach; ?>
    <input type="submit" value="Vote">
</form>
