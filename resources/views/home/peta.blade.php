<section class="categories my-5 p-3">
	<div class="row">
		<div class="col-lg-12">
		  <div class="section-title">
			<h4>Search by Map</h4>
		  </div>
		</div>
	</div>

	<form action="" method="get">
	<div class="mapnih mb-5">
		<svg viewBox="0 0 1376 494" fill="none" xmlns="http://www.w3.org/2000/svg">
		<g id="Group 1" filter="url(#filter0_d_840_372)">
		@foreach ($maps as $item)
		<a xlink:title="Nangroe Aceh Darussalam" xlink:href="" >
			<path id="Vector" d="M103.608 90.7074C104.661 98.3655 103.077 106.745 100.813 114C91.746 108.177 85.8998 98.4504 85.8998 93.9C85.8998 88.289 78.2679 74.0653 66.0228 69.7589C53.7458 65.4631 35.527 52.2364 27.5656 42.9766C19.6254 33.7275 -3.90811 18.1991 6.70004 3.9753C13.4497 -5.08294 30.2229 3.31768 38.5032 9.58631C46.7942 15.8762 81.5736 10.2439 89.5244 18.8461C93.0959 22.6964 99.0484 30.9379 106 39.4764C98.2193 52.3743 100.93 71.6363 103.162 87.6208L103.608 90.7074Z" fill="#F4F4F4"/>
		</a>
		@endforeach
	
		</g>
		<defs>
		<filter id="filter0_d_840_372" x="0" y="0" width="1376" height="494" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
		<feFlood flood-opacity="0" result="BackgroundImageFix"/>
		<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
		<feOffset dy="4"/>
		<feGaussianBlur stdDeviation="2"/>
		<feComposite in2="hardAlpha" operator="out"/>
		<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
		<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_840_372"/>
		<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_840_372" result="shape"/>
		</filter>
		</defs>
		</svg>
	</div>

	</form>
</section>
