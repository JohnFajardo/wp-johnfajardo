        <ul class="pagination">
          <li class="prev-page"><a href="#"><</a></li>
          <li class="page"><a href="#">1</a></li>
          <li class="page"><a href="#">2</a></li>
          <li class="active page">3</li>
          <li class="page"><a href="#">4</a></li>
          <li class="next-page"><a href="#"">></a></li>
        </ul>

        <hr />
	
<?php $args = array(
    'base'               => '%_%',
    'format'             => '?paged=%#%',
    'total'              => 1,
    'current'            => 0,
    'show_all'           => true,
    'end_size'           => 1,
    'mid_size'           => 2,
    'prev_next'          => true,
    'prev_text'          => __('« Previous'),
    'next_text'          => __('Next »'),
    'type'               => 'plain',
    'add_args'           => true,
    'add_fragment'       => '',
    'before_page_number' => '',
    'after_page_number'  => ''
); 
get_the_posts_pagination($args);

?>