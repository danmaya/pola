<html>
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=gb18030">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Men's Coats | Online Sale | POLA</title>
        
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/ico" href="favicon.ico"/>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    </head>
    <body>
        <div class="container text-left ">
			<div class="display-1 py-3" style="font-family: OPTIBodoni-Antiqua;src: url(OPTIBodoni-Antiqua.otf)"><span style="cursor: pointer">POLA</span></div>
		</div>

        <div class="album py-3">
			<div class="container">
				<div class="card-columns">

				<?php
					require "simple_html_dom.php";

					$url = "https://www.zara.com/uk/en/man-outerwear-l715.html?v1=1702113";
					$html = file_get_html($url);

					$firstColumnProducts = $html->find('li[class="product-grid-product _product product-grid-product--ZOOM1-columns product-grid-product--0th-column"]');
					$secondColumnProducts = $html->find('li[class="product-grid-product _product product-grid-product--ZOOM1-columns product-grid-product--1th-column"]');
					$thirdColumnProducts = $html->find('li[class="product-grid-product _product product-grid-product--ZOOM1-columns product-grid-product--2th-column"]');
					$fourthColumnProducts = $html->find('li[class="product-grid-product _product product-grid-product--ZOOM1-columns product-grid-product--3th-column"]');

					foreach ($firstColumnProducts as $firstColumnProduct) {

						/* Name and Image */
						$productLinks = $firstColumnProduct->find('a[class="product-link product-grid-product__link link"]');

						foreach ($productLinks as $productLink) {
							$productMediaContainers = $productLink->find('div[class="product-grid-media-container"]');

							foreach ($productMediaContainers as $productMediaContainer) {
								$productMediaGrids = $productMediaContainer->find('div[class="media product-grid-media"]');

								foreach ($productMediaGrids as $productMediaGrid) {
									$productMediaWrappers = $productMediaGrid->find('div[class="media__wrapper media__wrapper--fill"]');

									foreach ($productMediaWrappers as $productMediaWrapper) {
										$productImages = $productMediaWrapper->find('picture[class="media-image"]');

										foreach ($productImages as $productImage) {
											$name = $productImage->find('img', 0)->attr['alt'];
											$image = $productImage->find('img', 0)->attr['src'];

											echo "<div class='card mb-4' style='border: none'>";
											echo "<div class='text-center'>";
											echo "<img class='bd-placeholder-img img-fluid' src='https://static.zara.net/photos///2020/I/0/1/p/2753/360/401/72/w/563/2753360401_2_1_1.jpg?ts=1604502045449' width='500' style='cursor: pointer'></img>";
											echo "</div>";
											echo "<div class='card-body'>";
											echo "<h4 style='cursor: pointer'>" . $name . "</h4>";
										}
									}
								}
							}
						}

						echo "<div class='d-flex justify-content-between align-items-center'>";

						/* Price */
						$productInfoWrappers = $firstColumnProduct->find('div[class="product-grid-product__info-wrapper"]');

						foreach ($productInfoWrappers as $productInfoWrapper) {
							$productInfoGrids = $productInfoWrapper->find('div[class="product-grid-product-info"]');

							foreach ($productInfoGrids as $productInfoGrid) {
								$productPrices = $productInfoGrid->find('div[class="product-grid-product-info__price price"]');

								foreach ($productPrices as $productPrice) {
									$priceOld = $productPrice->find('span', 1)->innertext;
									$priceOldNumber = preg_replace('/\D/', '', $priceOld);
									$priceSaleRound = round($priceOldNumber * 0.95);
									$priceSale = substr_replace($priceSaleRound, '.', 2, 0);

									echo "<h4 class='text-muted'><span class='text-danger'>" . $priceSale . " GBP" . "</span> <small><del>" . $priceOld . "</del></small></h4>";
									echo "</div>";
									echo "</div>";
									echo "</div>";
								}
							}
						}
					}

					foreach ($secondColumnProducts as $secondColumnProduct) {

						/* Name and Image */
						$productLinks = $secondColumnProduct->find('a[class="product-link product-grid-product__link link"]');

						foreach ($productLinks as $productLink) {
							$productMediaContainers = $productLink->find('div[class="product-grid-media-container"]');

							foreach ($productMediaContainers as $productMediaContainer) {
								$productMediaGrids = $productMediaContainer->find('div[class="media product-grid-media"]');

								foreach ($productMediaGrids as $productMediaGrid) {
									$productMediaWrappers = $productMediaGrid->find('div[class="media__wrapper media__wrapper--fill"]');

									foreach ($productMediaWrappers as $productMediaWrapper) {
										$productImages = $productMediaWrapper->find('picture[class="media-image"]');

										foreach ($productImages as $productImage) {
											$name = $productImage->find('img', 0)->attr['alt'];
											$image = $productImage->find('img', 0)->attr['src'];

											echo "<div class='card mb-4' style='border: none'>";
											echo "<div class='text-center'>";
											echo "<img class='bd-placeholder-img img-fluid' src='https://static.zara.net/photos///2020/I/0/1/p/2753/360/401/72/w/563/2753360401_2_1_1.jpg?ts=1604502045449' width='500' style='cursor: pointer'></img>";
											echo "</div>";
											echo "<div class='card-body'>";
											echo "<h4 style='cursor: pointer'>" . $name . "</h4>";
										}
									}
								}
							}
						}

						echo "<div class='d-flex justify-content-between align-items-center'>";

						/* Price */
						$productInfoWrappers = $secondColumnProduct->find('div[class="product-grid-product__info-wrapper"]');

						foreach ($productInfoWrappers as $productInfoWrapper) {
							$productInfoGrids = $productInfoWrapper->find('div[class="product-grid-product-info"]');

							foreach ($productInfoGrids as $productInfoGrid) {
								$productPrices = $productInfoGrid->find('div[class="product-grid-product-info__price price"]');

								foreach ($productPrices as $productPrice) {
									$priceOld = $productPrice->find('span', 1)->innertext;
									$priceOldNumber = preg_replace('/\D/', '', $priceOld);
									$priceSaleRound = round($priceOldNumber * 0.95);
									$priceSale = substr_replace($priceSaleRound, '.', 2, 0);

									echo "<h4 class='text-muted'><span class='text-danger'>" . $priceSale . " GBP" . "</span> <small><del>" . $priceOld . "</del></small></h4>";
									echo "</div>";
									echo "</div>";
									echo "</div>";
								}
							}
						}
					}

					foreach ($thirdColumnProducts as $thirdColumnProduct) {

						/* Name and Image */
						$productLinks = $thirdColumnProduct->find('a[class="product-link product-grid-product__link link"]');

						foreach ($productLinks as $productLink) {
							$productMediaContainers = $productLink->find('div[class="product-grid-media-container"]');

							foreach ($productMediaContainers as $productMediaContainer) {
								$productMediaGrids = $productMediaContainer->find('div[class="media product-grid-media"]');

								foreach ($productMediaGrids as $productMediaGrid) {
									$productMediaWrappers = $productMediaGrid->find('div[class="media__wrapper media__wrapper--fill"]');

									foreach ($productMediaWrappers as $productMediaWrapper) {
										$productImages = $productMediaWrapper->find('picture[class="media-image"]');

										foreach ($productImages as $productImage) {
											$name = $productImage->find('img', 0)->attr['alt'];
											$image = $productImage->find('img', 0)->attr['src'];

											echo "<div class='card mb-4' style='border: none'>";
											echo "<div class='text-center'>";
											echo "<img class='bd-placeholder-img img-fluid' src='https://static.zara.net/photos///2020/I/0/1/p/2753/360/401/72/w/563/2753360401_2_1_1.jpg?ts=1604502045449' width='500' style='cursor: pointer'></img>";
											echo "</div>";
											echo "<div class='card-body'>";
											echo "<h4 style='cursor: pointer'>" . $name . "</h4>";
										}
									}
								}
							}
						}

						echo "<div class='d-flex justify-content-between align-items-center'>";

						/* Price */
						$productInfoWrappers = $thirdColumnProduct->find('div[class="product-grid-product__info-wrapper"]');

						foreach ($productInfoWrappers as $productInfoWrapper) {
							$productInfoGrids = $productInfoWrapper->find('div[class="product-grid-product-info"]');

							foreach ($productInfoGrids as $productInfoGrid) {
								$productPrices = $productInfoGrid->find('div[class="product-grid-product-info__price price"]');

								foreach ($productPrices as $productPrice) {
									$priceOld = $productPrice->find('span', 1)->innertext;
									$priceOldNumber = preg_replace('/\D/', '', $priceOld);
									$priceSaleRound = round($priceOldNumber * 0.95);
									$priceSale = substr_replace($priceSaleRound, '.', 2, 0);

									echo "<h4 class='text-muted'><span class='text-danger'>" . $priceSale . " GBP" . "</span> <small><del>" . $priceOld . "</del></small></h4>";
									echo "</div>";
									echo "</div>";
									echo "</div>";
								}
							}
						}
					}

					foreach ($fourthColumnProducts as $fourthColumnProduct) {

						/* Name and Image */
						$productLinks = $fourthColumnProduct->find('a[class="product-link product-grid-product__link link"]');

						foreach ($productLinks as $productLink) {
							$productMediaContainers = $productLink->find('div[class="product-grid-media-container"]');

							foreach ($productMediaContainers as $productMediaContainer) {
								$productMediaGrids = $productMediaContainer->find('div[class="media product-grid-media"]');

								foreach ($productMediaGrids as $productMediaGrid) {
									$productMediaWrappers = $productMediaGrid->find('div[class="media__wrapper media__wrapper--fill"]');

									foreach ($productMediaWrappers as $productMediaWrapper) {
										$productImages = $productMediaWrapper->find('picture[class="media-image"]');

										foreach ($productImages as $productImage) {
											$name = $productImage->find('img', 0)->attr['alt'];
											$image = $productImage->find('img', 0)->attr['src'];

											echo "<div class='card mb-4' style='border: none'>";
											echo "<div class='text-center'>";
											echo "<img class='bd-placeholder-img img-fluid' src='https://static.zara.net/photos///2020/I/0/1/p/2753/360/401/72/w/563/2753360401_2_1_1.jpg?ts=1604502045449' width='500' style='cursor: pointer'></img>";
											echo "</div>";
											echo "<div class='card-body'>";
											echo "<h4 style='cursor: pointer'>" . $name . "</h4>";
										}
									}
								}
							}
						}

						echo "<div class='d-flex justify-content-between align-items-center'>";

						/* Price */
						$productInfoWrappers = $fourthColumnProduct->find('div[class="product-grid-product__info-wrapper"]');

						foreach ($productInfoWrappers as $productInfoWrapper) {
							$productInfoGrids = $productInfoWrapper->find('div[class="product-grid-product-info"]');

							foreach ($productInfoGrids as $productInfoGrid) {
								$productPrices = $productInfoGrid->find('div[class="product-grid-product-info__price price"]');

								foreach ($productPrices as $productPrice) {
									$priceOld = $productPrice->find('span', 1)->innertext;
									$priceOldNumber = preg_replace('/\D/', '', $priceOld);
									$priceSaleRound = round($priceOldNumber * 0.95);
									$priceSale = substr_replace($priceSaleRound, '.', 2, 0);

									echo "<h4 class='text-muted'><span class='text-danger'>" . $priceSale . " GBP" . "</span> <small><del>" . $priceOld . "</del></small></h4>";
									echo "</div>";
									echo "</div>";
									echo "</div>";
								}
							}
						}
					}

					$html->clear();
				?>

				</div>
			</div>
		</div>
    </body>
</html>