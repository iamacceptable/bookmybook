<?php
	$this->view('main_layout/header');
?>
	<div class="container-scroller">
		<?php
			$this->view('Components/navbar');
		?>
		<div class="container-fluid page-body-wrapper">
			<?php
				$this->view('Components/sidebar');
			?>
			<div class="main-panel">
        		<div class="content-wrapper">
        			<?php
        				$this->view('Components/header');
        				$this->view('Dashboard/count');
        			?>
        		</div>
        		<?php
        			$this->view('Components/footer');
        		?>
        	</div>
		</div>
	</div>
<?php
	$this->view('main_layout/footer');
?>