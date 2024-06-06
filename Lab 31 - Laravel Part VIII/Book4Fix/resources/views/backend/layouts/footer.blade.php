            </div>
        </div>
    </div>
    <footer class="sticky-footer bg-gradient-info">
        <div class="container my-auto">
            <div class="copyright text-center my-auto text-white">
                <span>All Rights Reserved © <?php echo date('Y');?> | <a class="text-white" href="{{config('app.url')}}">{{config('app.name')}}</a></span>
            </div>
        </div>
    </footer>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <script src="{{url('backend/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{url('backend/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('backend/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{url('backend/js/admin.min.js')}}"></script>
    <script src="{{url('backend/js/datatables.js')}}"></script>
    <script src="{{url('backend/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{url('backend/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{url('backend/js/demo/chart-pie-demo.js')}}"></script>
    <script src="{{url('backend/js/form-script.js')}}"></script>
</body>
</html>
