<?php

namespace SilverStripe\Taskmanager;

use PageController;

class HomePageController extends PageController
{
  public function CarouselImages() {
    return HomePageSlide::get();
  }
}
