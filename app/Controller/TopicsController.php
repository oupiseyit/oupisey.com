<?php
	class TopicsController extends AppController
	{
		public function index()
		{
			
		}

		public function add()
		{
			if($this->request->is('post'))
			{
				  $this->Topic->create();
				  if($this->Topic->save($this->request->data))
				  {
				  	$this->redirect('index');
				  }
			}


		}
	}
?>