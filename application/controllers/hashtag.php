<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hashtag extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['hash'] = array(
								'acordabrasil',
								'ogiganteacordou',
								'protestomaringa',
								'protestosp',
								'protestorj',
								'protestolondrina',
								'protestoCE',
								'vemprarua',
								'protestofloripa',
								'protestosantos',
								'protestojau',
								'protestocampinas',
								'protestoBH',
								'protestoMG',
								'protestoRS',
								'protestobsb',
								'acordabrasila',
								'naoeso20centavos',
								'curagay',
								'brasil',
								'mostratuacara',
								'foradilma',
								'protestoRecife',
								'manifestopacifico',
								'pec37',
								'brasilia',
								'protestocuritiba',
								'protestoFortaleza'
							); 

		shuffle($data['hash']);

		$this->load->view('templates/header');
		$this->load->view('index');
		$this->load->view('templates/footer', $data);

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */