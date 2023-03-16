<?php
if ( isset( $_POST[ 'keywords' ] ) ) {
    // Get the list of keywords from the POST data
    $keywords = $_POST[ 'keywords' ];
    sort( $keywords );
    // Return the sorted list as an HTML list
    echo '<li>' . implode( '</li><li>', $keywords ) . '</li>';
}
?>
