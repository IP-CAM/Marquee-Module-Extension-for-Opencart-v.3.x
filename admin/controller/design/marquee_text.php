<?php

class ControllerDesignMovingText extends Controller {

    public function index()
    {

        $this->load->language('design/moving_text');
        $this->load->model('design/moving_text');

        $data['marquee'] = $this->model_design_moving_text->get();

        $data['breadcrumbs'] = array();
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);
        
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('design/layout', 'user_token=' . $this->session->data['user_token'], true)
		);

        $data['action'] = $this->url->link('design/moving_text/edit', 'user_token=' . $this->session->data['user_token'], true);

        $data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('design/moving_text', $data));

    }

    public function edit()
    {   

        $this->load->model('design/moving_text');

        $data = array(
            "1" =>  array( "text" => $this->request->post['text_customer_type_1'], "status" =>$this->request->post['status_customer_type_1']),
            "2" =>  array( "text" => $this->request->post['text_customer_type_2'], "status" =>$this->request->post['status_customer_type_2'])
        );

        $this->model_design_moving_text->update($data);

        $this->response->redirect($this->url->link('design/moving_text', 'user_token=' . $this->session->data['user_token'], true));


    }



}