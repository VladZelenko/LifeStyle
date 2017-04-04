<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
	<button id="searchsubmit"><i class="fa fa-search" aria-hidden="true"></i></button>
	<input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="Submit Story" class="head-serch" />
</form>