<div class="container-fluid">
	<div id="carousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carousel" data-slide-to="0" class="active"></li>
			<li data-target="#carousel" data-slide-to="1"></li>
			<li data-target="#carousel" data-slide-to="2"></li>
			<li data-target="#carousel" data-slide-to="3"></li>
		</ol>

		<div class="carousel-inner" role="listbox">
		    <div class="item active">
		    	<img src="<?php echo base_url('assets/images/aoa1.png'); ?>" alt="aoa1">
		    </div>

		    <div class="item">
				<img src="<?php echo base_url('assets/images/aoa2.jpg'); ?>" alt="aoa2">
		    </div>

		    <div class="item">
				<img src="<?php echo base_url('assets/images/aoa3.png'); ?>" alt="aoa3">
		    </div>
	  	</div>

		<a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
	  	</a>
		<a class="right carousel-control" href="#carousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>