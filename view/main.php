<?php
    ob_start();
?>
<h2>MVC techonolgy project. Books</h2>
<article>
    <p>
        View the list of books and indepth information of one book
    </p>
</article>
<?php
    $content = ob_get_clean();
?>
<?php include 'view/templates/layout.php';?>