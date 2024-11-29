@extends('layouts.app')

@section('title', 'Professionnels de la santé')

@section('content')
<section class="banner-type bg_cover rel" style="background-image: url('{{ asset('media/a propos/1920x935-8.png') }}');">
	<div class="filtre abs"></div>
	<h1 class="abs">Professionnels de la santé</h1>

</section>

<div class="container container-type px-4">
	<div class="row mainRow bootstrapElement">
		<div class="bootstrapElement col-12 col-md-6 col-lg-3 d-flex flex-column align-items-center order-2 order-lg-1"><img class="consulte-picto" alt="" src="{{ asset('media/professionnels de santé/300x300-stetoscope.png') }}" /></div>
		<div class="bootstrapElement col-12 col-md-6 col-lg-9 d-flex flex-column justify-content-center order-1 order-lg-2">
			<h3><span style="color: #008080;">M&eacute;decin g&eacute;n&eacute;raliste&nbsp;</span></h3>
			<p><span style="color: #003366;">Je souhaite consulter un m&eacute;decin g&eacute;n&eacute;raliste sur Bruxelles&nbsp;:&nbsp;</span><a href="http://www.doctorbrussels.be" target="_blank" rel="noopener">doctorbrussels.be</a></p>
			<p><span style="color: #003366;">Je souhaite consulter un m&eacute;decin g&eacute;n&eacute;raliste en Belgique&nbsp;:</span> <a href="https://www.doctoranytime.be" target="_blank" rel="noopener">doctoranytime.be</a> &nbsp;&nbsp;</p>
			<p><span style="color: #003366;">Je consulte un m&eacute;decin g&eacute;n&eacute;raliste dans une maison m&eacute;dicale en Belgique&nbsp;:</span> <a href="https://www.maisonmedicale.org/-Trouver-une-maison-medicale-en-Belgique-.html" target="_blank" rel="noopener">maisonmedicale.org</a></p>
		</div>
	</div>
	<div class="row mainRow bootstrapElement">
		<div class="bootstrapElement col-12 col-md-6 col-lg-3 d-flex flex-column align-items-center order-2 order-lg-1"><img class="consulte-picto" alt="" src="{{ asset('media/professionnels de santé/300x300-pharmacist.png') }}" /></div>
		<div class="bootstrapElement col-12 col-md-6 col-lg-9 d-flex flex-column justify-content-center order-1 order-lg-2">
			<h3><span style="color: #008080;">Pharmacien&nbsp;</span></h3>
			<p><span style="color: #003366;">Je m&rsquo;informe aupr&egrave;s de mon pharmacien&nbsp;:</span> <a href="https://www.pharmacie.be/fr/Pages/default.aspx" target="_blank" rel="noopener">pharmacie.be</a></p>
		</div>
	</div>
	<div class="row mainRow bootstrapElement">
		<div class="bootstrapElement col-12 col-md-6 col-lg-3 d-flex flex-column align-items-center order-2 order-lg-1"><img class="consulte-picto" alt="" src="{{ asset('media/professionnels de santé/300x300-scale.png') }}" /></div>
		<div class="bootstrapElement col-12 col-md-6 col-lg-9 d-flex flex-column justify-content-center order-1 order-lg-2">
			<h3><span style="color: #008080;">Di&eacute;t&eacute;ticien</span></h3>
			<p><span style="color: #003366;">&nbsp;Je souhaite consulter un di&eacute;t&eacute;ticien agr&eacute;&eacute; en Belgique&nbsp;:</span> <a href="https://lesdieteticiens.be/trouver-un-dieteticien/?_ga=2.150269430.1740144219.1629702035-1816071599.1629702035" target="_blank" rel="noopener">lesdieteticiens.be</a></p>
		</div>
	</div>
	<div class="row mainRow bootstrapElement">
		<div class="bootstrapElement col-12 col-md-6 col-lg-3 d-flex flex-column align-items-center order-2 order-lg-1"><span style="color: #008080;"><img class="consulte-picto" alt="" src="{{ asset('media/professionnels de santé/300x300-alcool.png') }}" /></span></div>
		<div class="bootstrapElement col-12 col-md-6 col-lg-9 d-flex flex-column justify-content-center order-1 order-lg-2">
			<h3><span style="color: #008080;">Prise en charge de la consommation excessive d&rsquo;alcool</span></h3>
			<p><span style="color: #003366;">&nbsp;Je souhaite consulter un expert en alcoologie&nbsp;:</span>&nbsp;<a href="https://www.reseaualcool.be/patients-et-proches/" target="_blank" rel="noopener">reseaualcool.be</a></p>
		</div>
	</div>
	<div class="row mainRow bootstrapElement">
		<div class="bootstrapElement col-12 col-md-6 col-lg-3 d-flex flex-column align-items-center order-2 order-lg-1"><img class="consulte-picto" alt="" src="{{ asset('media/professionnels de santé/300x300-tabac.png') }}" /></div>
		<div class="bootstrapElement col-12 col-md-6 col-lg-9 d-flex flex-column justify-content-center order-1 order-lg-2">
			<h3><span style="color: #008080;">Prise en charge du sevrage tabagique</span></h3>
			<p><span style="color: #003366;">Je souhaite consulter un tabacologue&nbsp;:</span> <a href="https://repertoire.fares.be" target="_blank" rel="noopener">repertoire.fares.be</a></p>
			<p><span style="color: #003366;">Comment arr&ecirc;ter de fumer&nbsp;?</span> <a href="https://www.tabacstop.be/fumeurs/comment-arr%c3%aater-de-fumer" target="_blank" rel="noopener">Tabacstop</a></p>
		</div>
	</div>
</div>
@endsection