<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Traits\CommonTraits;
use UserType;

class PageController extends BaseController
{
    use CommonTraits;
    
    public function index()
    {
        $theme_data = $this->admin_panel_common_data();
        $theme_data['_meta_title'] = 'Muncipal council, Barwaha';
        $theme_data['_page_title'] = 'Muncipal council, Barwaha';
        $theme_data['_breadcrumb1'] = 'Muncipal council, Barwaha';
        $theme_data['_view_files'][] = 'FrontTheme/pages/index';
        return view('FrontTheme/partials/main', $theme_data);
    }
    public function Parishad()
    {
        $theme_data = $this->admin_panel_common_data();
        $theme_data['_meta_title'] = 'Barwaha Parshad List';
        $theme_data['_page_title'] = 'Barwaha Parshad List';
        $theme_data['_breadcrumb1'] = 'Barwaha Parshad List';
        $theme_data['_view_files'][] = 'FrontTheme/pages/Parishad';
        return view('FrontTheme/partials/main', $theme_data);
    }
    public function aboutus()
    {
        $theme_data = $this->admin_panel_common_data();
        $theme_data['_meta_title'] = 'Barwaha About us and History';
        $theme_data['_page_title'] = 'Barwaha About us and History';
        $theme_data['_breadcrumb1'] = 'Barwaha About us and History';
        $theme_data['_view_files'][] = 'FrontTheme/pages/aboutus';
        return view('FrontTheme/partials/main', $theme_data);
    }
    public function map()
    {
        $theme_data = $this->admin_panel_common_data();
        $theme_data['_meta_title'] = 'Barwaha Map';
        $theme_data['_page_title'] = 'Barwaha Map';
        $theme_data['_breadcrumb1'] = 'Barwaha Map';
        $theme_data['_view_files'][] = 'FrontTheme/pages/map';
        return view('FrontTheme/partials/main', $theme_data);
    }
    public function placestovisit()
    {
        $theme_data = $this->admin_panel_common_data();
        $theme_data['_meta_title'] = 'Barwaha Tourist attractions Places';
        $theme_data['_page_title'] = 'Barwaha Tourist attractions Places';
        $theme_data['_breadcrumb1'] = 'Barwaha Tourist attractions Places';
        $theme_data['_view_files'][] = 'FrontTheme/pages/placestovisit';
        return view('FrontTheme/partials/main', $theme_data);
    }
    public function howtoreach()
    {
        $theme_data = $this->admin_panel_common_data();
        $theme_data['_meta_title'] = 'Barwaha How to reach';
        $theme_data['_page_title'] = 'Barwaha How to reach';
        $theme_data['_breadcrumb1'] = 'Barwaha How to reach';
        $theme_data['_view_files'][] = 'FrontTheme/pages/howtoreach';
        return view('FrontTheme/partials/main', $theme_data);
    }
    public function contactus()
    {
        $theme_data = $this->admin_panel_common_data();
        $theme_data['_meta_title'] = 'Barwaha Contact Us';
        $theme_data['_page_title'] = 'Barwaha Contact Us';
        $theme_data['_breadcrumb1'] = 'Barwaha Contact Us';
        $theme_data['_view_files'][] = 'FrontTheme/pages/contactus';
        return view('FrontTheme/partials/main', $theme_data);
    }
    protected function admin_panel_common_data(): array
    {
        // Initialize the theme data array
        $theme_data = [];
        $theme_data['_assets_path'] = 'FrontTheme/';
        $theme_data['_theme_path'] = 'FrontTheme/';
        $theme_data['_partials_path'] = $theme_data['_theme_path'] . 'partials/';
    
        $theme_data['_meta_title'] = '';
        $theme_data['_page_title'] = '';
        $theme_data['_breadcrumb1'] = '';
        $theme_data['_breadcrumb2'] = '';
        
        // Css
        $theme_data['_head_css_code'] = "";
        $theme_data['_head_css_files'][] = $theme_data['_assets_path'] . 'css/style.css';
        
        // Pre Script
        $theme_data['_head_js_code'] = "const base_url = '" . base_url() . "'";
        $theme_data['_head_js_files'][] = $theme_data['_assets_path'] . 'js/pre-script.js';
        
        // Post Script
        $theme_data['_script_files'][] = $theme_data['_assets_path'] . 'js/script.js';
        $theme_data['_script_files'][] = $theme_data['_assets_path'] . 'js/comman.js';
        $theme_data['_script_js_code'] = "";
        $theme_data['_view_files'] = [];
        
        // Admin API URL
        $theme_data['admin_api_url'] = 'https://hansaadmin.yec.oab.mybluehostin.me/';
        
        // Initialize contact mobile data
        $theme_data['contact_mobile'] = '';
    
        return $theme_data;
    }
}
