<?php
    ob_start();
    //include header.php file
    include('header_songs.php');
?>

<?php
    //banner area
    include('Template/_banner-area_songs.php'); 
    //banner area end

    //Top shows area
    include('Template/_top-sale_songs.php');
    //Top shows area end

    //Our shows library 
    include('Template/_special-price_songs.php');
    //Our shows library 

    //Latest additions to database or upcoming shows,movies etc.
    include('Template/_blogs_songs.php');
    //End of Latest additions to database or upcoming shows,movies etc.
?>            
        
<?php
    // includeheader.php file
        include('footer.php');
    //End of Footer....include header.php file
?>

        