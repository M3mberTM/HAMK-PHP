<hr>
<div class="row" id="footer">
    <div class="col-sm-4">
        <h4 class="footer-heading" id="footer-center">Bon appetit!</h4>
    </div>
    <div class="col-sm-4">
        <div id="footer-helper">
            <?php
            $currentPage= $_SERVER['SCRIPT_NAME'];
            $pageName = basename($currentPage);
            $lastModification = filemtime($pageName);
            $dateModified = date('Y-m-d H:i:s', $lastModification);
            ?>
            <h4><?php echo 'Page: '. $pageName?></h4>
            <h4><?php echo 'Last modified: '. $dateModified?></h4>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="row">
            <h4 class="footer-heading">Socials</h4>
        </div>
        <div class="row">
            <div class="socials">
                <a href="#" id="twitter"><img src="images/headerFooter/x_white.png" class="socials-logo" alt="Our Twitter account"></a>
                <a href="#" id="instagram"><img src="images/headerFooter/instagram_white.png" class="socials-logo" alt="Our Instagram account"></a>
                <a href="#" id="facebook"><img src="images/headerFooter/facebook_white.png"
                                               class="socials-logo" alt="Our Facebook account"></a>
            </div>
        </div>
    </div>

</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>