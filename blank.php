<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
  <meta charset="utf-8">
  <script>
    var elements = document.querySelectorAll('.property-text');

    elements.forEach(function(element) {
      var text = element.textContent;
      if (text.length > 300) {
        element.textContent = text.slice(0, 300) + '...';
      }
    });
  </script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Beyond Visscher - Your Trusted Realtor in Fraser Valley</title>
  <link rel="canonical" href="https://gobeyondrealestate.com/blank.html">
  <meta property="og:url" content="https://gobeyondrealestate.com/blank.html">
<?php include("_include/meta-link.php"); ?>
</head>

<body>

  <!-- Start: Navbar Right Links -->
  <?php include("_include/top_navbar.php"); ?>
  <!-- End: Navbar Right Links -->
  <section class="innerpage-main"></section> 
  <!-- Start: newsletter -->
  <?php include("_include/newsletter_plug.php"); ?>
  <!-- End: newsletter -->
  
<!-- Start: footer -->
  <?php include("_include/footer.php"); ?>
  <!-- End: footer -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>