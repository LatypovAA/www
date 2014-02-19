<?php
class Controller_Main extends Controller
{
    function __construct() {
        $this->model = new Model_main();
        $this->view = new View();
        $this->session = new App_Session_User();
    }
            function action_index()
    {   App_Session::start();
        $data = $this->model->get_data();
        $this->view->generate('main_view.php', 'tamplate_view.php', $data, 'Guest book');
    }
}