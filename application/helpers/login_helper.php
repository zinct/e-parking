<?php 

function is_loggin_auth()
{
	
	$ci =& get_instance();

	if ($ci->session->userdata('username')) {
		redirect(BASE_URL('Admin/index'),'refresh');
	}

}

function is_loggin()
{

	$ci =& get_instance();

	if (!$ci->session->userdata('username')) {
		redirect(BASE_URL('Auth/index'),'refresh');
	}

}

function is_uri_correct()
{

	$ci =& get_instance();

	if (!$ci->uri->segment(3)) {
		redirect(BASE_URL('Auth/forbidden'),'refresh');
	}

}