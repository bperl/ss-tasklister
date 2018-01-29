<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <% if CarouselImages %>
      <% loop CarouselImages %>
        <div class="carousel-item <% if First %>active<% end_if %> ">
          <img class="d-block w-100" src=$Photo.URL alt=$Photo.title >
        </div>
      <% end_loop %>
    <% end_if %>
  </div>
</div>
