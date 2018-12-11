<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewCompilingController extends Controller {

    public $viewData = array();
    public $globalCss = array();
    public $globalJs = array();
    public $headerCssData = array();
    public $headerJsData = array();
    public $footerJsData = array();
    public $finalHeaderCssData = array();
    public $finalHeaderJsData = array();
    public $finalFooterJsData = array();

    public function buildPages($pagename) {

        $pageConfig = config('Pages.' . $pagename);
        $this->globalCss = config('globalCss');
        $this->globalJs = config('globalJs');

        $this->headerCssData = $pageConfig['headerCss'];
        $this->headerJsData = $pageConfig['headerJs'];
        $this->footerJsData = $pageConfig['footerJs'];

        $sections = array('headSection', 'headerSection',  'leftSection', 'FooterSection');


        foreach ($sections as $section) {
            $this->viewData[$section .'s'] = $pageConfig[$section];
        }


        foreach ($this->headerCssData as $cssKey) {
            $this->finalHeaderCssData[$cssKey] = $this->globalCss[$cssKey];
        }

        foreach ($this->headerJsData as $jsKey) {
            $this->finalHeaderJsData[$jsKey] = $this->globalJs[$jsKey];
        }

        foreach ($this->footerJsData as $jsKey) {
            if (!empty($this->globalJs[$jsKey])) {
                $this->finalFooterJsData[$jsKey] = $this->globalJs[$jsKey];
            }
        }

        
        $this->viewData['finalHeaderCssData'] = $this->finalHeaderCssData;
        $this->viewData['finalHeaderJsData'] = $this->finalHeaderJsData;
        $this->viewData['finalFooterJsData'] = $this->finalFooterJsData;
        
       //dd($pageConfig['layout']);
       // return view($pageConfig['layout'], ['title' => 'my website']);
      return view($pageConfig['layout'], $this->viewData);
    }

}
