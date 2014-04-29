<form method="get" id="search" action="<?php bloginfo('url'); ?>/">
<div id="searchform"><input type="text" value="<?php the_search_query(); ?>" name="s" id="search-text" />
<input type="submit" id="search-submit" value="Search" />
</div>
</form>