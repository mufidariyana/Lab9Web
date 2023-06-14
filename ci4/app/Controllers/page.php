<?php
namespace App\Controllers;

class Page extends BaseController
{
  public function about()
  {
    return view('about', [
      'title' => 'Halaman About',
      'content' => 'Ini adalah halaman about yang menjelaskan tentang isi halaman ini.'
    ]);
  }
  
  public function artikel()
  {
    $data['artikel'] = [];

    return view('artikel/index', $data);
   
  }
  
  
  public function contact()
  {
    return view('contact', [
      'title' => 'Halaman Contact',
      'content' => 'Ini adalah halaman Contact yang menjelaskan tentang isi halaman ini.'
    ]);
  }
  
  public function tos()
  {
    echo "ini halaman Term of Services";
  }
}
