<script>
	
	(function($){
  $.fn.percentPie = function(options){

    var settings = $.extend({
      width: 100,
      trackColor: "EEEEEE",
      barColor: "777777",
      barWeight: 30,
      startPercent: 0,
      endPercent: 1,
      fps: 60
    }, options);

    this.css({
      width: settings.width,
      height: settings.width
    });

    var that = this,
      hoverPolice = false,
      canvasWidth = settings.width,
      canvasHeight = canvasWidth,
      id = jQuery('canvas').length,
      canvasElement = $('<canvas id="'+ id +'" width="' + canvasWidth + '" height="' + canvasHeight + '"></canvas>'),
      canvas = canvasElement.get(0).getContext("2d"),
      centerX = canvasWidth/2,
      centerY = canvasHeight/2,
      radius = settings.width/2 - settings.barWeight/2;
      counterClockwise = false,
      fps = 1000 / settings.fps,
      update = .01;
      this.angle = settings.startPercent;

    this.drawArc = function(startAngle, percentFilled, color){
      var drawingArc = true;
      canvas.beginPath();
      canvas.arc(centerX, centerY, radius, (Math.PI/180)*(startAngle * 360 - 90), (Math.PI/180)*(percentFilled * 360 - 90), counterClockwise);
      canvas.strokeStyle = color;
      canvas.lineWidth = settings.barWeight;
      canvas.stroke();
      drawingArc = false;
    }

    this.fillChart = function(stop){
      var loop = setInterval(function(){
        hoverPolice = true;
        canvas.clearRect(0, 0, canvasWidth, canvasHeight);

        that.drawArc(0, 360, settings.trackColor);
        that.angle += update;
        that.drawArc(settings.startPercent, that.angle, settings.barColor);

        if(that.angle > stop){
          clearInterval(loop);
          hoverPolice = false;
        }
      }, fps);
    }

    this.mouseover(function(){
      if(hoverPolice == false){
        that.angle = settings.startPercent;
        that.fillChart(settings.endPercent);
      }
    });

    this.fillChart(settings.endPercent);
    this.append(canvasElement);
    return this;
  }
}(jQuery));

jQuery(document).ready(function() {
  
  jQuery('.google').percentPie({
    width: 90,
    trackColor: "#444444",
    barColor: "#2682D5",
    barWeight: 20,
    endPercent: .<?php echo get_theme_mod('dicaracx_cricleone_progress_detacated',60); ?>,
    fps: 60
  });
  
  jQuery('.moz').percentPie({
    width: 90,
    trackColor: "#444444",
    barColor: "#33CBE0",
    barWeight: 20,
    endPercent: .<?php echo get_theme_mod('dicaracx_cricletwo_progress_detacated',70); ?>,
    fps: 60
  });
  
  jQuery('.safari').percentPie({
    width: 90,
    trackColor: "#444444",
    barColor: "#60DB5C",
    barWeight: 20,
    endPercent: .<?php echo get_theme_mod('dicaracx_criclethree_progress_detacated',80); ?>,
    fps: 60
  });
    
});

</script>
