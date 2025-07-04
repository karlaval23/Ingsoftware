<?= headerAdmin(); ?>
<?= navAdmin(); ?>
<!-- <main class="app-content">
	<div class="page-error tile">
		<h1 class="text-danger"><i class="bi bi-exclamation-circle"></i> Error 404: Page not found</h1>
		<p>The page you have requested is not found.</p>
		<p><a class="btn btn-primary" href="javascript:window.history.back();">Go Back</a></p>
	</div>
</main> -->

<main>
    <div class="main">

      <section class="error-404 d-flex flex-column align-items-center justify-content-center">
        <h1>404</h1>
        <h2>The page you are looking for doesn't exist.</h2>
        <a class="btn" href="<?=base_url();?>dashboard">Back to home</a>
        <img src="assets/img/not-found.svg" class="img-fluid py-5" alt="Page Not Found">
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </section>

    </div>
  </main><!-- End #main -->
<?= footerAdmin(); ?>