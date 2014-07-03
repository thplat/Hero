<?php

class AdminController extends Controller {

    public function showDashboard()
    {
        return View::make('admin.dashboard');
    }

}