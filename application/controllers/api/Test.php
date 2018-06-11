<?php

require APPPATH . 'libraries/Restful.php';

class Test extends Restful {

    public function __construct() {
        parent::__construct();
    }

    public function index_get()
    {
        if(rand(0, 1)) {
            $this->response("METHOD GET", Restful::HTTP_OK); // OK (200) being the HTTP response code
        } else {
            $this->response([
                'status' => FALSE,
                'message' => 'Not Found'
            ], Restful::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
        }

    }

    public function index_post()
    {
        echo "METHOD POST";exit;
        $this->set_response($message, Restful::HTTP_CREATED); // CREATED (201) being the HTTP response code
    }

    public function index_put()
    {
        echo "METHOD PUT";exit;
        $this->response(NULL, Restful::HTTP_BAD_REQUEST); // BAD_REQUEST (400) being the HTTP response code
    }

    public function index_delete()
    {
        echo "METHOD DELETE";exit;

        $this->set_response($message, Restful::HTTP_NO_CONTENT); // NO_CONTENT (204) being the HTTP response code
    }

}

?>