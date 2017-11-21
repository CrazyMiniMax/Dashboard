<?php

namespace Maxma\Dashboard;

class Dashboard
{
    public function render()
    {
        $data = 'Maxma';
        return view('Dashboard::dashboard', compact('data'));
    }
}