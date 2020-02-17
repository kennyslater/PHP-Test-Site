<?php 
    define("TITLE", "Menu | Olly's Food House");
    include('includes/header.php');
    
?>

    <div id="menu-items">
        
        <h1>Our Delicious Menu</h1>
        <p>Like our team, our menu is small &mdash; but it packs a punch!</p>
        <p><em>Click any menu item to read about it.</em></p>
        
        <hr>
        
        <ul>
            <?php foreach ($menuItems as $dish => $item) { ?>
                 
                <li><a href="dish.php?item=<?php echo $dish; ?>"><?php echo $item[title]; ?></a> <sup>$</sup><?php echo $item[price];?> </li>
            
            <?php } ?>    
        
        </ul>
    </div><!--Menu Items-->

<?php include ('includes/footer.php');?>