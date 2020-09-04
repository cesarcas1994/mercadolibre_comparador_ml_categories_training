<?php
class Controllers_Test extends RestController {


	public function get() {

		$params = http_build_query($this->request['params']);

		// from model/meli_model.php
		$meli = new Meli;
		$data_extractor_result = $meli -> data_extractor($params);
		//ini_set('display_errors', '0'); Eliminates deprecated php issues

		$this->response = array('Response' => $data_extractor_result);
		$this->responseStatus = 200;
	}
	public function post() {
		$this->response = array('TestResponse' => 'I am POST response. Variables sent are - ' . http_build_query($this->request['params']));
		$this->responseStatus = 201;
	}
	public function put() {
		$this->response = array('TestResponse' => 'I am PUT response. Variables sent are - ' . http_build_query($this->request['params']));
		$this->responseStatus = 200;
	}
	public function delete() {
		$this->response = array('TestResponse' => 'I am DELETE response. Variables sent are - ' . http_build_query($this->request['params']));
		$this->responseStatus = 200;
	}
}
