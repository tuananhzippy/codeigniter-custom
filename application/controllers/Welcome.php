<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Carbon\Carbon;

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->blade->set('foo', 'bar')
			->set('an_array', array(1, 2, 3, 4))
			->append('an_array', 5)
			->set_data(array('more' => 'data', 'other' => 'data'))
			->render('test', array('author' => 'Tuấn Anh Zippy - kieutuananh1995@gmail.com', 'now' => Carbon::now()));
	}

	public function test() {
		echo 1;exit;
	}
}
