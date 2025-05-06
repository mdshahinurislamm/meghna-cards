<?php
/* Template Name: Meghna Footer
    Version: 1.0
*/
//insertDummyData('Post Type Name' , 'Number of post', 'Post title', 'Content')
?>
</main>
{{insertDummyData('Footer', 1, 'Copyright', 'Copyright 2024')}}
@foreach(getPostsByType('footer') as $post)
{!! $post->content !!}
@endforeach
