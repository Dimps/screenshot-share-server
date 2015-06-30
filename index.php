<?php
    
    $img = htmlspecialchars($_SERVER['QUERY_STRING']);
    
    // Pattern for 2015.06.21_16.10.06_8wig4jqe.png
    $is_good_filename = preg_match("/^\d{4}\.\d{2}\.\d{2}_\d{2}\.\d{2}\.\d{2}\_[a-z0-9]{8}\.png$/", $img);
    $exists = $is_good_filename && file_exists($img);
    if (!$exists) {
        http_response_code(404);
    }

?>


<!DOCTYPE html>
<html>
<head>
    <?php if ($exists) { ?>
        <title><?php echo $img ?> by Dima Stefantsov</title>
    <?php } else { ?>
        <title>404 Not Found</title>
    <?php } ?>
    <link rel="stylesheet" href="index.css" type="text/css" />
    <link rel="shortcut icon" href="favicon.ico">
</head>
<body>
    <?php if ($exists) { ?>
        <main>
            <h1><?php echo $img ?></h1>
            <a href="<?php echo $img ?>">
                <img src="<?php echo $img ?>" />
            </a>
        </main>
        <footer>
            <a href="http://stefantsov.com/" target="_blank">stefantsov.com</a>
        </footer>
    <?php } else { ?>
        <main>
            <h1 class="error">404 Not Found</h1>
            <p>This image is not found.</p>
        </main>
    <?php } ?>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter31173931 = new Ya.Metrika({
                        id:31173931,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true,
                        ut:"noindex"
                    });
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/31173931?ut=noindex" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

    <!-- Dima Stefantsov -->
    <!-- mailto:dima@stefantsov.com -->

</body>
</html>
