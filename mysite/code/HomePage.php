<?php

namespace SilverStripe\Taskmanager;

use Page;

class HomePage extends Page
{
  private static $table_name = 'HomePage';

  private static $has_many = [
       'HomePageSlide' => HomePageSlide::class,
  ];
}
