<div class="row">
    <div id="piechart" style="position: absolute; left: 38%;"></div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart(){
            var data = google.visualization.arrayToDataTable([
                ['Danh Mục','Số Lượng'],
                <?php
                $tongdm=count($listStatistical);
                $i=1;
                    foreach ($listStatistical as $thongke){
                        extract($thongke);
                        if($i==$tongdm) $dauphay=""; else $dauphay=",";
                        echo "  ['".$thongke['tendm']."',".$thongke['countsp']."]".$dauphay;
                        $i+=1;
                    }
                ?>

            ]);

            var options = {'title':'Biểu đồ thống kê sản phẩm',
                'width':800,
                'height':700,
                'titleTextStyle': {
                fontSize: 20
            } };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }
    </script>

</div>
