<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ingridlucas
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div id="presentation" class="container-fluid">
			<div class="container py-5">
				<h1>Ingrid Lucas</h1>
				<h2>Ostéopathe D.O.</h2>
			</div>
			<div class="lien-rdv container">
				<a href="https://www.doctolib.fr/osteopathe/communay/ingrid-lucas" target="_blank">
					Prendre rendez-vous en ligne
				</a>
			</div>
		</div>

		<article id="cabinet" class="container-fluid">
			<h2>Le cabinet</h2>
			<div class="row justify-content-center">
				<p class="col-md-8">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum laudantium aut facere ducimus nulla fuga qui dolorum fugiat odio! Excepturi ipsam delectus quas fuga ab laudantium dolor. Qui, a aperiam?</p>
				<img class="col-md-3" src="data:image/jpeg;base64,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" alt="Ingrid Lucas Ostéopathe">
			</div>
		</article>

		<article id="consultation" class="container-fluid">
			<h2>Quand consulter un ostéopathe ?</h2>
			<div class="container">
				<div class="row">
					<div class="col-12 col-md consultation">
						<img src="" alt="" >
						<h6>Adultes</h6>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, vel eaque! Expedita provident, iure ea rem officia odit enim ratione dolorem. Nemo corporis ex cupiditate repudiandae nesciunt laborum error consequuntur.</p>
					</div>
					<div class="col-12 col-md consultation">
						<img src="" alt="" >
						<h6>Enfants</h6>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, vel eaque! Expedita provident, iure ea rem officia odit enim ratione dolorem. Nemo corporis ex cupiditate repudiandae nesciunt laborum error consequuntur.</p>
					</div>
					<div class="col-12 col-md consultation">
						<img src="" alt="" >
						<h6>Femmes enceintes</h6>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, vel eaque! Expedita provident, iure ea rem officia odit enim ratione dolorem. Nemo corporis ex cupiditate repudiandae nesciunt laborum error consequuntur.</p>
					</div>
				</div>
			</div>
		</article>

		<article id="seance" class="container-fluid">
			<h2>Comment se déroule une séance ?</h2>

			<div id="etape1" class="container">
				<h3>Etape 1</h3>
				<div class="row">
					<img class="col col-md-3" src="https://via.placeholder.com/90x70" alt="">
					<div class="col col-md-9">
						<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur perferendis impedit a quibusdam ipsum aliquid voluptates. Totam quo facilis error sequi porro voluptates libero vitae modi quae repellendus! Unde, itaque!</p>
					</div>
				</div>
			</div>

			<div id="etape2" class="container">
				<h3>Etape 2</h3>
				<div class="row">
					<img class="order-2 col col-md-3" src="https://via.placeholder.com/90x70" alt="">
					<div class="order-1 col col-md-9">
						<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur perferendis impedit a quibusdam ipsum aliquid voluptates. Totam quo facilis error sequi porro voluptates libero vitae modi quae repellendus! Unde, itaque!</p>
					</div>
				</div>
			</div>

			<div id="etape3" class="container">
				<h3>Etape 3</h3>
				<div class="row">
					<img class="col col-md-3" src="https://via.placeholder.com/90x70" alt="">
					<div class="col col-md-9">
						<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur perferendis impedit a quibusdam ipsum aliquid voluptates. Totam quo facilis error sequi porro voluptates libero vitae modi quae repellendus! Unde, itaque!</p>
					</div>
				</div>
			</div>

			<div id="etape4" class="container">
				<h3>Etape 4</h3>
				<div class="row">
					<img class="order-2 col col-md-3" src="https://via.placeholder.com/90x70" alt="">
					<div class="order-1 col col-md-9">
						<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur perferendis impedit a quibusdam ipsum aliquid voluptates. Totam quo facilis error sequi porro voluptates libero vitae modi quae repellendus! Unde, itaque!</p>
					</div>
				</div>
			</div>
		</article>

		<article id="rdv" class="container-fluid">
			<div class="container rdv">
				<h4>Pour prendre rendez-vous</h4>
				<p>
					Je suis joignable au
					<a href="tel:+33627584026">
						06 27 58 40 26
					</a>
				</p>

				<p>ou directement sur Internet </p>
				<div class="lien-rdv container">
					<a href="https://www.doctolib.fr/osteopathe/communay/ingrid-lucas" target="_blank">
						Prendre rendez-vous en ligne
					</a>
				</div>

			</div>

			<div class="container rdv">
				<h4>honoraires</h4>
				<p>Tarif de la consulation <span class="bold">55 euros</span></p>
				<p>Les séances d'ostéopathie ne sont pas remboursées par la sécurité sociale mais le sont par les mutuelles</p>
				<p>Je vous délivre une facture à envoyer à votre mutuelle pour le remboursement</p>
			</div>

		</article>

		<article id="infos" class="container-fluid">
			<h6>Ingrid Lucas</h6>
			<h6>Ostéopathe D.O.</h6>
			<p>24 bis rue de Chassagne <br> 69360 Ternay</p>
			<a href="tel:+33627584026">
				<i class="fas fa-phone-alt"></i>
				06 27 58 40 26
			</a>

		</article>
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
