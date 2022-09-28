<?php

// codes...

if ($this->user->hasPermission('access', 'design/marquee_text')) {
    $design[] = array(
        'name'	   => $this->language->get('text_marquee_text'),
        'href'     => $this->url->link('design/marquee_text', 'user_token=' . $this->session->data['user_token'], true),
        'children' => array()
    );	
}

// codes...


?>