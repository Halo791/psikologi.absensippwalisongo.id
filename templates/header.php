<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduTech - Dashboard Kampus</title>
    <link rel="stylesheet" href="Template_file/canyon/assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Links of CSS files -->
    <link rel="stylesheet" href="Template_file/canyon/assets/css/aos.css">
    <link rel="stylesheet" href="Template_file/canyon/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Template_file/canyon/assets/css/boxicons.min.css">
    <link rel="stylesheet" href="Template_file/canyon/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="Template_file/canyon/assets/css/flaticon.css">
    <link rel="stylesheet" href="Template_file/canyon/assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="Template_file/canyon/assets/css/style.css">
    <link rel="stylesheet" href="Template_file/canyon/assets/css/header.css">
    <link rel="stylesheet" href="Template_file/canyon/assets/css/responsive.css">

    <title>Canyon - College University HTML Template</title>
    <link rel="icon" type="image/png" href="../Template_file/canyon/assets/img/logo/PSI-LOGO.png">
</head>
<script src="Template_file/canyon/assets/js/jquery.min.js"></script>
<script src="Template_file/canyon/assets/js/aos.js"></script>
<script src="Template_file/canyon/assets/js/bootstrap.min.js"></script>
<script src="Template_file/canyon/assets/js/magnific-popup.min.js"></script>
<script src="Template_file/canyon/assets/js/owl.carousel.min.js"></script>
<script src="Template_file/canyon/assets/js/main.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
      const thumbnail = document.getElementById("video-thumbnail");
      const videoId = thumbnail.getAttribute("data-video-id");
  
      // Load thumbnail image
      thumbnail.style.backgroundImage = `url(https://img.youtube.com/vi/${videoId}/maxresdefault.jpg)`;
  
      // Replace thumbnail with iframe when clicked
      thumbnail.addEventListener("click", function() {
        const iframe = document.createElement("iframe");
        iframe.setAttribute("src", `https://www.youtube.com/embed/${videoId}?autoplay=1`);
        iframe.setAttribute("frameborder", "0");
        iframe.setAttribute("allow", "autoplay; encrypted-media");
        iframe.setAttribute("allowfullscreen", "true");
        iframe.style.position = "absolute";
        iframe.style.top = "0";
        iframe.style.left = "0";
        iframe.style.width = "100%";
        iframe.style.height = "100%";
  
        thumbnail.parentNode.replaceChild(iframe, thumbnail);
      });
    });
  </script>
  
  
  

<body>
   
