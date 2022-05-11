<?php

class Controller {

	// Declare public variables for the controller class
	public $load;
	public $model;
	
	// Create functions for the controller class
	function __construct($pageURI = null) // constructor of the class
	{
		$this->load = new Load(); 
		$this->model = new Model();
		// determine what page you are on
		$this->$pageURI();
	}
    // home page function
	function home()
	{
		// $data = $this->model->model3D_info();
		$this->load->view('viewHomepage');
	}

	//texts table

	function getJSON()
	{
		$data = $this->model->dbGetData();
		echo json_encode($data);
	}

	function apiCreateTable()
	{
	  	// echo "Create table function";
		$data = $this->model->zeroCreate();
		$this->load->view('viewMessage', $data);
	}
	function apiInsertData()
	{
		$data = $this->model->dbInsertData();
	   	$this->load->view('viewMessage', $data);
	}  
	function apiGetData()
	{
		$data = $this->model->dbGetData();
		$this->load->view('view3DAppData', $data);
	}  

	function apishaguang()
	{
		$data = $this->model->dbDelete();
		$this->load->view('viewMessage', $data);
	}



	//imgs table
	function getJSON1()
	{
		$data = $this->model->dbGetData1();
		echo json_encode($data);
	}

	function apiCreateTable1()
	{
	  	// echo "Create table function";
		$data = $this->model->zeroCreate1();
		$this->load->view('viewMessage', $data);
	}
	function apiInsertData1()
	{
		$data = $this->model->dbInsertData1();
	   	$this->load->view('viewMessage', $data);
	}  
	function apiGetData1()
	{
		$data = $this->model->dbGetData1();
		$this->load->view('view3DAppData', $data);
	}  

	function apishaguang1()
	{
		$data = $this->model->dbDelete1();
		$this->load->view('viewMessage', $data);
	}



	// models table
	
	function getJSON2()
	{
		$data = $this->model->dbGetData2();
		echo json_encode($data);
	}

	function apiCreateTable2()
	{
	  	// echo "Create table function";
		$data = $this->model->zeroCreate2();
		$this->load->view('viewMessage', $data);
	}
	function apiInsertData2()
	{
		$data = $this->model->dbInsertData2();
	   	$this->load->view('viewMessage', $data);
	}  
	function apiGetData2()
	{
		$data = $this->model->dbGetData2();
		$this->load->view('view3DAppData', $data);
	}  

	function apishaguang2()
	{
		$data = $this->model->dbDelete2();
		$this->load->view('viewMessage', $data);
	}


	// controller table
	
	function getJSON3()
	{
		$data = $this->model->dbGetData3();
		echo json_encode($data);
	}

	function apiCreateTable3()
	{
	  	// echo "Create table function";
		$data = $this->model->zeroCreate3();
		$this->load->view('viewMessage', $data);
	}
	function apiInsertData3()
	{
		$data = $this->model->dbInsertData3();
	   	$this->load->view('viewMessage', $data);
	}  
	function apiGetData3()
	{
		$data = $this->model->dbGetData3();
		$this->load->view('view3DAppData', $data);
	}  

	function apishaguang3()
	{
		$data = $this->model->dbDelete3();
		$this->load->view('viewMessage', $data);
	}

	


	function apiGetFlickrService()
	{
		$this ->load->view('viewFlickrService');
	}

	function apiGetJson()
	{
		$this->load->view('viewJson');
	}



}
?>