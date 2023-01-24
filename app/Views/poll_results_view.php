<!-- view for displaying poll results -->
<h1><?php echo $poll_question; ?></h1>
<ul>
    <?php foreach ($results as $option) : ?>
        <li><?php echo $option['name']; ?> - <?php echo $option['percentage']; ?>%</li>
    <?php endforeach; ?>
</ul>
