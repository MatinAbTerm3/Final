<script src="https://kit.fontawesome.com/60e0c0a516.js" crossorigin="anonymous"></script>
<?php
include '__php__.php';
echo "
	<article class = 'col-3 card-deck'>
		<section class = 'card container fluid'>
			<img src = '{$row['image']}' class = 'card-img-top'>
			<section class = 'card-body'>
				<h4 class = 'card-title'>
					<a href = 'productDetails.php?id={$row['id']}' class = 'card-link'>
						نام کتاب:{$row['bookname']}
					</a>
				</h4>
				<section class = 'card-text'>
					<p>
						<span class = 'fw-bold'>قیمت : </span>"
						.number_format($row['price'])." نومان <br>
						
					</p>
					<a href = 'editProduct.php?id={$row['id']}' class = 'btn btn-primary'>دامه</a>
					
				</section>
			</section>
		</section>
	</article>
";

?>