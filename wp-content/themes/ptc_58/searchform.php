<form method="get" action="<?php echo home_url();?>">
 <!-- get_search_query gets the query from the user input -->
    <div class="form-row">
      <div class="col">
      <input class="form-control" type="search" name="s" placeholder="search here..." value="<?php echo get_search_query();?>">
      </div>
      <div class="col">
      <input type="submit" id="search-btn" value="Search">
      </div>
    
    </div>
</form>