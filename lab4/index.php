/* The code you provided is a PHP script that includes the "header.php" file at the beginning and the
"footer.php" file at the end. In between, it displays a list of links to navigate to different pages
related to products. The links point to "product-list.php" and "product-add.php" pages. This code is
likely part of a web application or website where users can view a list of products and add more
products. */
<?php
include_once("header.php");
?>
<!-- lab 4 là 4,5,6 -->
<ul>
    <li>
        <a href="product-list.php">List of products</a>
    </li>

    <li>
        <a href="product-add.php">More products</a>
    </li>

</ul>

<?php
include_once("footer.php");
?>