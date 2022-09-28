<?php

// codes...


//marquee text

if (isset($this->session->data['account'])){

    $this->load->adminmodel('design/moving_text');

    $customer_type = $this->session->data['account']['category_id'];
    $customer_data = $this->model_design_moving_text->get();

    switch ($customer_type) {

        case 1:
            $data['marquee']['text'] = $customer_data[0]['text'];
            $data['marquee']['status'] = $customer_data[0]['status'];
            break;
        
        case 2:
            $data['marquee']['text'] = $customer_data[1]['text'];
            $data['marquee']['status'] = $customer_data[1]['status'];
            break;

    }

}


// codes...

?>