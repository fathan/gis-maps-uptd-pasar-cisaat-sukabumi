<!-- <script src="asset/javascript/modernizr-2.5.3.min.js"></script> -->
<script src="asset/javascript/jquery-1.7.2.min.js"></script>
<script src="asset/javascript/jquery-ui-1.8.21.custom.min.js"></script>
<script src="asset/javascript/jquery.ui.touch-punch.min.js"></script>
<script src="asset/javascript/bootstrap.min.js"></script>
<script src="asset/javascript/jquery.validate.js"></script>
<script src="asset/javascript/demo.validation.js"></script>
<!-- <script src="asset/javascript/Theme.js"></script> -->
<!-- <script src="asset/tinybox/tinybox.js"></script> -->


<!-- table -->
<script type="text/javascript" src="asset/tinytable/script.js"></script>
<script type="text/javascript">
    var sorter = new TINY.table.sorter('sorter','table',{
        headclass:'head',
        ascclass:'asc',
        descclass:'desc',
        evenclass:'evenrow',
        oddclass:'oddrow',
        evenselclass:'evenselected',
        oddselclass:'oddselected',
        paginate:true,
        size:10,
        colddid:'columns',
        // currentid:'currentpage',
        // totalid:'totalpages',
        // startingrecid:'startrecord',
        // endingrecid:'endrecord',
        // totalrecid:'totalrecords',
        hoverid:'selectedrow',
        pageddid:'pagedropdown',
        navid:'tablenav',
        sortcolumn:1,
        sortdir:1,
        sum:[8],
        avg:[6,7,8,9],
        columns:[{index:7, format:'%', decimals:1},{index:8, format:'$', decimals:0}],
        init:true
    });
</script>

<script src="asset/ckeditor/ckeditor.js"></script>