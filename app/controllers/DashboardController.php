<?php

class DashboardController extends BaseController {

  public function showHome()
  {
    return View::make('dashboard.home');
  }

  public function showSettings()
  {
    return View::make('dashboard.settings');
  }

}
