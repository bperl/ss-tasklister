<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
  <% loop CarouselImages %>
    <% if First %>
      <div class="carousel-item active">
        <img class="d-block w-100" src=$Photo.URL alt=$Photo.title >
      </div>
    <% else %>
      <div class="carousel-item">
        <img class="d-block w-100" src=$Photo.URL alt=$Photo.title >
      </div>
      <% end_if %>
    <% end_loop %>
  </div>
</div>
