<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-center">
                <p>Copyright © Estatedekho 2020. All rights reserved. | Designed & Developed by <a href="https://odms.in/" target="_blank">ODMS PVT LTD</a></p>
            </div>
            <div class="col-md-4 pull-right text-center">
                <a href="http://estatedekho.com/policy.php" target="_blank">Privacy Policy</a>
            </div>
        </div>
    </div>
</footer>
<div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Download Brochure</h4>
                </div>
                <div class="modal-body">
                    <form action="broucher.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control ht-40" placeholder="Name" name="name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control ht-40" placeholder="Contact Number" name="phone">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control ht-40" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control ht-40" value="Vaishnavi Oasis" readonly name="project">
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-block ht-40" value="Download Brochure" onclick="window.open('docs/pdf.pdf')">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>