<?php
    ob_start();
    //include header.php file
    include('header_movies.php');
?>

<?php
    //banner area
    include('Template/_banner-area_movies.php'); 
    //banner area end

    //Top shows area
    include('Template/_top-sale_movies.php');
    //Top shows area end

    //Our shows library 
    include('Template/_special-price_movies.php');
    //Our shows library 

    //Latest additions to database or upcoming shows,movies etc.
    include('Template/_blogs_movies.php');
    //End of Latest additions to database or upcoming shows,movies etc.
?>            
        
<?php
    // includeheader.php file
        include('footer.php');
    //End of Footer....include header.php file
?>

        