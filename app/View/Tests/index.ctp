test - index
<?php 
    if( $this->Access->isLoggedIn() )
       echo $this->Access->user('username');
