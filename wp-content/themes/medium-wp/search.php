<div class="search-page__bar">
    <form class = "search" action="<?php bloginfo('url'); ?>/wp-admin/admin-ajax.php?action=wpsearch">     

    	<input type="text" name="searchText" class="search-page__search" placeholder="Search Medium">

		 <button class="submitSearch" type="Submit">Submit</button>

    </form>
</div>


<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/modules/search.js"></script>