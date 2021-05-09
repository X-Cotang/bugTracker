<h1>Tìm kiếm</h1>
<?php 
  if(isset($result)){
    echo "<h1>No result</h1>";
  }
?>

<form action="" method="">
  <div class="search-form">
    <input type="text" class="search" placeholder="" name="keyword">
    <select class="" id="" style="background-color: #f0f8ffc7;border: 1px solid #ced4da;border-radius: .25rem;" name="type">
      <option value="all">All</option>
      <option value="hashtag">Hashtag</option>
      <option value="catalog">Catalog</option>
    </select>
    <div class="">
      <button class="btn" type="submit">Button</button>
    </div>
    <input type="hidden" value="search" name="controller">
  </div>  
</form>