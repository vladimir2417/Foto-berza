<?php
include 'header.php';
?>
<script id="jsbin-javascript">
	(function (global) {
		if(typeof (global) === "undefined")
		{
			throw new Error("window is undefined");
		}
		var _hash = "!";
		var noBackPlease = function () {
			global.location.href += "#";
			global.setTimeout(function () {
				global.location.href += "!";
			}, 50);
		};	
		global.onhashchange = function () {
			if (global.location.hash !== _hash) {
				global.location.hash = _hash;
			}
		};
		global.onload = function () {        
			noBackPlease();
			document.body.onkeydown = function (e) {
				var elm = e.target.nodeName.toLowerCase();
				if (e.which === 8 && (elm !== 'input' && elm  !== 'textarea')) {
					e.preventDefault();
				}
				e.stopPropagation();
			};		
		};
	})(window);
</script>
<div class="main main-raised"> 
	
	<div class="section">
		<div class="container">
			<div class="row">
				<div id="aside" class="col-md-3">
					<div id="get_category">
					</div>
				</div>

				<div id="store" class="col-md-9">
					<div class="store-filter clearfix">
						<div class="store-sort">
							

							<label>
								Prikazi:
								<select class="input-select">
									<option value="0">20</option>
									<option value="1">50</option>
								</select>
							</label>
						</div>
						
					</div>

					<div class="row" id="product-row">
						<div class="col-md-12 col-xs-12" id="product_msg">
						</div>
						<div id="get_product">
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include "footer.php";
?>