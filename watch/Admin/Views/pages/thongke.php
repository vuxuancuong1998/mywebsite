

<style type="text/css">
.highcharts-figure, .highcharts-data-table table {
    width: 100%;
  
}
</style>
<script src="../../chart/code/highcharts.js"></script>
  <script src="../../chart/code/modules/series-label.js"></script>
  <script src="../../chart/code/modules/exporting.js"></script>
  <script src="../../chart/code/modules/export-data.js"></script>
  <script src="../../chart/code/modules/accessibility.js"></script>
	
 <!-- <?php print_r($data['thanggannhat']); ?>  -->
<!-- <?php print_r($data['soluongTungThang']); ?> -->
<!-- <?php print_r($data['doanhthutheothang']); ?> -->

<figure class="highcharts-figure">
    <div id="hightChart"></div>
    <p class="highcharts-description">
        Biểu đồ thống kê đơn hàng theo tháng.
    </p>
</figure>
    
 <script type="text/javascript">
// var month;
// var soluong;
// window.onload = function (e) {
//         // body...
//     month = <?php echo json_encode($data["thanggannhat"]); ?>;
//     month = JSON.parse(month);

//     soluong = <?php echo json_encode($data["soluongTungThang"]); ?>;
//     soluong = JSON.parse(soluong);

//     }
    Highcharts.chart('hightChart', {
        chart: {
            type: 'line'
        },

    title: {
        text: 'Thống kê đơn hàng trong năm 2019'
    },

    
    yAxis: {
        title: {
            text: 'Đơn vị'
        }
    },

    xAxis: {

        categories: <?php echo $data['thanggannhat'] ;?>,
        title:{
            text:"THÁNG",
        }
    },

    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    plotOptions: {
        series: {
            label: {
                connectorAllowed: false
            },
            
        }
    },

    series: [{
        name: 'Số lượng',
        data:[<?php echo $data['soluongTungThang']; ?>]
        
        
    },
    {
        name: 'Doanh thu (USD)',
        data: [<?php echo $data["doanhthutheothang"];?>] 
    }, 
    ],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 200
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                }
            }
        }]
    }

});

  </script>
  



	
