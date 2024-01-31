<?php
// Read JSON file
$json_data = file_get_contents('C:\Users\anike\Desktop\Task 3\data.json');
$data = json_decode($json_data, true); // true to decode as array

// Get the current page slug
global $post;
$page_slug = $post->post_name;

// Display content based on page slug
if ($page_slug == 'home') {
    echo '<h2>' . $data['home']['title'] . '</h2>';
    echo '<p>' . $data['home']['content'] . '</p>';
} elseif ($page_slug == 'about') {
    echo '<h2>' . $data['about']['title'] . '</h2>';
    echo '<p>' . $data['about']['content'] . '</p>';
} elseif ($page_slug == 'contact') {
    echo '<h2>' . $data['contact']['title'] . '</h2>';
    echo '<p>' . $data['contact']['content'] . '</p>';
} else {
    // Handle other pages
    echo 'Page not found';
}
?>
