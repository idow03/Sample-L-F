        <!-- Bootstrap Css -->
        <link id="style" href="<?php echo $baseUrl; ?>/assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Style Css -->
        <link href="<?php echo $baseUrl; ?>/assets/css/styles.css" rel="stylesheet">

        <!-- Icons Css -->
        <link href="<?php echo $baseUrl; ?>/assets/css/icons.css" rel="stylesheet">

        <!-- Node Waves Css -->
        <link href="<?php echo $baseUrl; ?>/assets/libs/node-waves/waves.min.css" rel="stylesheet">

        <!-- SwiperJS Css -->
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/libs/swiper/swiper-bundle.min.css">

        <!-- Color Picker Css -->
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/libs/flatpickr/flatpickr.min.css">
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/libs/@simonwep/pickr/themes/nano.min.css">

        <!-- Choices Css -->
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/libs/choices.js/public/assets/styles/choices.min.css">

        <script>
            if (localStorage.menodarktheme) {
                document.querySelector("html").setAttribute("data-theme-mode", "dark")
            }
            if (localStorage.menortl) {
                document.querySelector("html").setAttribute("dir", "rtl")
                document.querySelector("#style")?.setAttribute("href", "<?php echo $baseUrl; ?>/assets/libs/bootstrap/css/bootstrap.rtl.min.css");
            }
        </script>