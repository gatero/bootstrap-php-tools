<?php
  class Bootstrap_Navbar {
    
    private $menu_options = array();
    private $menu_group = array();

    function set_menu_option($option_data){
      array_push($this->menu_options, $option_data);
    }

    function make_menu_group(){
      foreach ($this->menu_options as $data) {
        $menu_option = "<li class='".$data['css_class']."'>"
                      ."  <a href='".$data['href']."'>"
                      .     $data['label']
                      ."  </a>"
                      ."</li>";
        echo $menu_option;
      }
    }

    function get_template(){
      $navbar = "<nav class='navbar navbar-default'>"
               ."  <div class='container-fluid'>"
               ."    <div class='navbar-header'>"
               ."      <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1' aria-expanded='false'>"
               ."        <span class='sr-only'>Toggle navigation</span>"
               ."        <span class='icon-bar'></span>"
               ."        <span class='icon-bar'></span>"
               ."        <span class='icon-bar'></span>"
               ."      </button>"
               ."      <a class='navbar-brand' href='#'>Brand</a>"
               ."    </div>"
               ."    <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>"
               ."      <ul class='nav navbar-nav'>"
               ."        <li class='active'><a href='#'>Link <span class='sr-only'>(current)</span></a></li>"
               ."        <li><a href='#'>Link</a></li>"
               ."        <li class='dropdown'>"
               ."          <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Dropdown <span class='caret'></span></a>"
               ."            <ul class='dropdown-menu'>"
               ."              <li role='separator' class='divider'></li>"
               ."              <li><a href='#'>Separated link</a></li>"
               ."            </ul>"
               ."        </li>" 
               ."      </ul>"
               ."      <form class='navbar-form navbar-left' role='search'>"
               ."        <div class='form-group'>"
               ."          <input type='text' class='form-control' placeholder='Search'>"
               ."        </div>"
               ."        <button type='submit' class='btn btn-default'>Submit</button>"
               ."      </form>"
               ."      <ul class='nav navbar-nav navbar-right'>"
               ."        <li><a href='#'>Link</a></li>"
               ."      </ul>"
               ."    </div>"
               ."  </div>"
               ."</div>";
      echo $navbar;
    }
  }
  $navbar = new Bootstrap_Navbar();
  
  $counter = 10;
  while($counter>0){
    $option_data = array(
      'css_class' => 'prueba'.$counter,
      'href' => 'prueba.com'.$counter,
      'label' => 'prueba'.$counter
    );
    $navbar->set_menu_option($option_data);
    $counter--;
  }
  $navbar->make_menu_group();
