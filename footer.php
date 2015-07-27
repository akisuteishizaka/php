    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <!-- Morris Charts JavaScript -->
    <script src="/js/plugins/morris/raphael.min.js"></script>

    <script src="/js/plugins/morris/morris-data.js"></script>

    <!-- datepicker jsファイル読み込み -->
    <script src="/js/bootstrap-datepicker.js"></script>
    <script src="/js/bootstrap-datepicker.ja.js"></script>

    <!-- datepicker option -->
    <script type="text/javascript">
        $('#datepicker').datepicker({
            format: 'yyyy-mm-dd',
            language: 'ja',
            autoclose: true,
            orientation: "auto top",
            pickDate: true,
            pickTime: true,
            hourStep: 1,
            minuteStep: 15,
            secondStep: 30,
            inputMask: true,
            todayBtn: "linked",
            todayHighlight: true
        });
    </script>
</body>

</html>