<div class="sound-wave-bg">
  <canvas id="3d_dots_waves"></canvas>
</div>
<script>
  // t: current time, b: begInnIng value, c: change In value, d: duration
  var easing= {
    def: 'easeOutQuad',
    swing: function (t, b, c, d) {
      //alert(easing.default);
      return easing[easing.def](x, t, b, c, d);
    },
    easeInQuad: function (t, b, c, d) {
      return c*(t/=d)*t + b;
    },
    easeOutQuad: function (t, b, c, d) {
      return -c *(t/=d)*(t-2) + b;
    },
    easeInOutQuad: function (t, b, c, d) {
      if ((t/=d/2) < 1) return c/2*t*t + b;
      return -c/2 * ((--t)*(t-2) - 1) + b;
    },
    easeInCubic: function (t, b, c, d) {
      return c*(t/=d)*t*t + b;
    },
    easeOutCubic: function (t, b, c, d) {
      return c*((t=t/d-1)*t*t + 1) + b;
    },
    easeInOutCubic: function (t, b, c, d) {
      if ((t/=d/2) < 1) return c/2*t*t*t + b;
      return c/2*((t-=2)*t*t + 2) + b;
    },
    easeInQuart: function (t, b, c, d) {
      return c*(t/=d)*t*t*t + b;
    },
    easeOutQuart: function (t, b, c, d) {
      return -c * ((t=t/d-1)*t*t*t - 1) + b;
    },
    easeInOutQuart: function (t, b, c, d) {
      if ((t/=d/2) < 1) return c/2*t*t*t*t + b;
      return -c/2 * ((t-=2)*t*t*t - 2) + b;
    },
    easeInQuint: function (t, b, c, d) {
      return c*(t/=d)*t*t*t*t + b;
    },
    easeOutQuint: function (t, b, c, d) {
      return c*((t=t/d-1)*t*t*t*t + 1) + b;
    },
    easeInOutQuint: function (t, b, c, d) {
      if ((t/=d/2) < 1) return c/2*t*t*t*t*t + b;
      return c/2*((t-=2)*t*t*t*t + 2) + b;
    },
    easeInSine: function (t, b, c, d) {
      return -c * Math.cos(t/d * (Math.PI/2)) + c + b;
    },
    easeOutSine: function (t, b, c, d) {
      return c * Math.sin(t/d * (Math.PI/2)) + b;
    },
    easeInOutSine: function (t, b, c, d) {
      return -c/2 * (Math.cos(Math.PI*t/d) - 1) + b;
    },
    easeInExpo: function (t, b, c, d) {
      return (t==0) ? b : c * Math.pow(2, 10 * (t/d - 1)) + b;
    },
    easeOutExpo: function (t, b, c, d) {
      return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;
    },
    easeInOutExpo: function (t, b, c, d) {
      if (t==0) return b;
      if (t==d) return b+c;
      if ((t/=d/2) < 1) return c/2 * Math.pow(2, 10 * (t - 1)) + b;
      return c/2 * (-Math.pow(2, -10 * --t) + 2) + b;
    },
    easeInCirc: function (t, b, c, d) {
      return -c * (Math.sqrt(1 - (t/=d)*t) - 1) + b;
    },
    easeOutCirc: function (t, b, c, d) {
      return c * Math.sqrt(1 - (t=t/d-1)*t) + b;
    },
    easeInOutCirc: function (t, b, c, d) {
      if ((t/=d/2) < 1) return -c/2 * (Math.sqrt(1 - t*t) - 1) + b;
      return c/2 * (Math.sqrt(1 - (t-=2)*t) + 1) + b;
    },
    easeInElastic: function (t, b, c, d) {
      var s=1.70158;var p=0;var a=c;
      if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
      if (a < Math.abs(c)) { a=c; var s=p/4; }
      else var s = p/(2*Math.PI) * Math.asin (c/a);
      return -(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
    },
    easeOutElastic: function (t, b, c, d) {
      var s=1.70158;var p=0;var a=c;
      if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
      if (a < Math.abs(c)) { a=c; var s=p/4; }
      else var s = p/(2*Math.PI) * Math.asin (c/a);
      return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
    },
    easeInOutElastic: function (t, b, c, d) {
      var s=1.70158;var p=0;var a=c;
      if (t==0) return b;  if ((t/=d/2)==2) return b+c;  if (!p) p=d*(.3*1.5);
      if (a < Math.abs(c)) { a=c; var s=p/4; }
      else var s = p/(2*Math.PI) * Math.asin (c/a);
      if (t < 1) return -.5*(a*Math.pow(2,10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )) + b;
      return a*Math.pow(2,-10*(t-=1)) * Math.sin( (t*d-s)*(2*Math.PI)/p )*.5 + c + b;
    },
    easeInBack: function (t, b, c, d, s) {
      if (s == undefined) s = 1.70158;
      return c*(t/=d)*t*((s+1)*t - s) + b;
    },
    easeOutBack: function (t, b, c, d, s) {
      if (s == undefined) s = 1.70158;
      return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
    },
    easeInOutBack: function (t, b, c, d, s) {
      if (s == undefined) s = 1.70158; 
      if ((t/=d/2) < 1) return c/2*(t*t*(((s*=(1.525))+1)*t - s)) + b;
      return c/2*((t-=2)*t*(((s*=(1.525))+1)*t + s) + 2) + b;
    },
    easeInBounce: function (t, b, c, d) {
      return c - easing.easeOutBounce (x, d-t, 0, c, d) + b;
    },
    easeOutBounce: function (t, b, c, d) {
      if ((t/=d) < (1/2.75)) {
        return c*(7.5625*t*t) + b;
      } else if (t < (2/2.75)) {
        return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
      } else if (t < (2.5/2.75)) {
        return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
      } else {
        return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
      }
    },
    easeInOutBounce: function (t, b, c, d) {
      if (t < d/2) return easing.easeInBounce (x, t*2, 0, c, d) * .5 + b;
      return easing.easeOutBounce (x, t*2-d, 0, c, d) * .5 + c*.5 + b;
    }
  };

  ;(function() {
      var lastTime = 0;
      var vendors = ['webkit', 'moz'];
      for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
          window.requestAnimationFrame = window[vendors[x] + 'RequestAnimationFrame'];
          window.cancelAnimationFrame = window[vendors[x] + 'CancelAnimationFrame'] ||
                                        window[vendors[x] + 'CancelRequestAnimationFrame'];
      }

      if (!window.requestAnimationFrame) {
          window.requestAnimationFrame = function(callback, element) {
              var currTime = new Date().getTime();
              var timeToCall = Math.max(0, 16.7 - (currTime - lastTime));
              var id = window.setTimeout(function() {
                  callback(currTime + timeToCall);
              }, timeToCall);
              lastTime = currTime + timeToCall;
              return id;
          };
      }
      if (!window.cancelAnimationFrame) {
          window.cancelAnimationFrame = function(id) {
              clearTimeout(id);
          };
      }
  }());

  TIME = (function() {
      var TIME = {},
          T,
          last = (new Date()).getTime(),
          now,
          detal,
          lastDetal;

      TIME.timers = {};

      TIME.clock = function () {
          now = (new Date()).getTime();
          detal = (now - last); 

          /*if (Math.abs(lastDetal-detal)> 2) 
          frameInfo.innerHTML = parseInt(1000/detal)>60?60:parseInt(1000/detal);
          <div id="frameInfo" style="position: fixed; top:0; left: 0; z-index: 1111"></div>*/
          
          detal = detal > 200? 20 : detal;
          lastDetal = detal;
          last = now;

          for (var key in TIME.timers) {
              if (TIME.timers[key] && TIME.timers[key].action)
              TIME.timers[key].clock(detal);
          }

          T = window.requestAnimationFrame(TIME.clock);
      }

      TIME.stop = function() {
          window.cancelAnimationFrame(T);
      }

      TIME.getTimer = function(cvs, ctx, cvsName, startAction) {
          return new Timer(cvs, ctx, cvsName, startAction);
      }

      // timer Class
      var Timer = function(cvs, ctx, cvsName, startAction) {
          this.cvs = cvs;
          this.ctx = ctx;
          this.name = cvsName;
          this.startAction = startAction;
          this.timeBodys = [];
          TIME.timers[this.name] = this;
      }

      Timer.prototype.start = function() {
          this.startAction&&this.startAction();
          this.startAction = null;
          this.action = true;
      }

      Timer.prototype.pause = function() {
          this.action = false;
      }

      Timer.prototype.add = function(timeBody) {
          this.timeBodys.push(timeBody);
      }

      Timer.prototype.remove = function(timeBody) {
          try {
              delete(TIME.timers[this.name]);
          } catch(e) {
              TIME.timers[this.name] = null;
          }
      }

      Timer.prototype.clock = function(detal) {
          var that = this;
          this.ctx.clearRect(0,0, this.cvs.width, this.cvs.height);
          this.timeBodys.forEach(function(timeBody) {
              that.ctx.save();
              timeBody.clock(detal, now);
              that.ctx.restore();
          });
      }

      Timer.prototype.destory = function() {
          TIME.timers[this.name] = null;
      }

      return TIME;
  })();

  TIME.clock();


  (function() {

    var windowWidth = document.body.clientWidth||document.documentElement.clientWidth;

    // var cvs = document.querySelectorAll('canvas')[0];
    var cvs = document.getElementById('3d_dots_waves');
    cvs.width = windowWidth;
    cvs.height = 800;

    var ctx = cvs.getContext('2d');

    var cvsWidth = cvs.width,
      cvsHeiht = cvs.height,
      pointsData = {left: [], right: []},
      colCount = 61, 
      maxWidth = 70, 
      angle = 0.15, // x/y
      baseX = cvsWidth*0.5,
      baseY = cvsHeiht*0.5, 
      v = 2000,
      waveWidth = 25, 
      waveHeight = 6, 
      crowd = 0.5,
      color = '#095661',
      maxCount = 200 * cvsWidth/2560,
      minWidth = 6;


    // cvs
    var offLineCvs = document.createElement('canvas'),
      offLineCtx = offLineCvs.getContext('2d');

    offLineCvs.width = 30;
    offLineCvs.height = 30;

    offLineCtx.fillStyle = color;
    offLineCtx.beginPath();
    offLineCtx.arc(
      offLineCvs.width/2,
      offLineCvs.height/2,
      offLineCvs.width/2,
      0,
      Math.PI*2
    );
    offLineCtx.fill();

      
    function createDots() {
      pointsData = {left: [], right: []};

      var dis = 0,
        index = 1, 
        data = {},
          total = baseX*(1+angle),
          lastDis = -minWidth;


      while (dis < total+500) {
        data = {timePass: 0, percent: 0, start: 0};
        dis = lastDis + (index/maxCount)*(index/maxCount) * maxWidth + minWidth;
            data.width = dis - lastDis;
            lastDis = dis;
        data.xCrood = parseInt(-dis);
        pointsData.left.push(data);
        index++;
      }
        //console.log(pointsData.left);

      dis = 0;
      index = 0; 
      data = {};
      total = cvsWidth - baseX*(1-angle);
      lastDis = 0;


        while (dis < total+500) {
            data = {timePass: 0, percent: 0, start: 0};
            dis = lastDis + (index/maxCount)*(index/maxCount) * maxWidth + minWidth;
            data.width = dis - lastDis;
            lastDis = dis;
            data.xCrood = parseInt(+dis);
            pointsData.right.push(data);
            index++;
        }
    }

    function setPointsData(powerX, datas) {
      var halfWaveWidth = (waveWidth/2),
        offsetX,
        percent;

      datas.forEach(function(data, i, datas) {
        offsetX = Math.abs(i-powerX);
        if (offsetX < halfWaveWidth) {
          percent = 1 - offsetX/halfWaveWidth;
          //data.percent = (percent + data.percent)/2;
          data.percent = 1 - easing.easeInOutSine(offsetX, 0, 1, halfWaveWidth);
        } else {
          data.percent = 0;
        }
      });	
    }

    function draw(datas) {

      ctx.fillStyle = color;
      datas.forEach(function(data, i) {
        var width = data.width,
          yCrood,
          xSign = data.xCrood > 0? -1: 1,
          ySign,
          dotX,
          dotY,
          dWidth,
          opacity,
          yPer,
              xPer;

        for (var j=0; j < colCount; j++) {
          yCrood = (j - colCount/2) * (width * 1.3 + data.percent*width/4) + baseY;
          yPer = ((colCount/2)-Math.abs(j - colCount/2))/(colCount/2);
              xPer  = (Math.abs(dotX-baseX))/(cvsWidth*0.4)

          dotX = data.xCrood + (yCrood * angle) + baseX + xSign * data.percent * (width * waveHeight);

          dWidth = yPer * crowd * width * (1+(xPer)*data.percent*0.2);
          dotY = yCrood;

          opacity = yPer * yPer * (xPer);

          //ctx.globalAlpha = opacity;

          ctx.drawImage(
            offLineCvs,0,0,offLineCvs.width,offLineCvs.height,
            parseInt(dotX), parseInt(dotY), parseInt(dWidth), parseInt(dWidth)
          );
          //ctx.beginPath();
          //ctx.fillRect(parseInt(dotX), parseInt(dotY), parseInt(dWidth), parseInt(dWidth));
        }
      });
    }



    var powerXes = [];
    function createPowerX(initDis, datas, moveDis, dur) {
      powerXes.push({'powerX': 0, 'datas': datas, 'moveDis': moveDis, 'initDis': initDis, 'dur': dur, 'pass': 0});
    }

    function getClock() {

        var createTime = 2000,
          createPass = 0,
          avarageDurTime = 8000,
          durTime = avarageDurTime;

      createDots();
        function clock(detal) {
            ctx.fillStyle = '#fff';


            pointsData.left.forEach(function(data) { data.percent = 0; });
            pointsData.right.forEach(function(data) { data.percent = 0; });

            createPass += detal;
            if (createPass > createTime) {
              createPowerX(30, pointsData['left'], maxCount, durTime);
              createPowerX(30, pointsData['right'], maxCount, durTime);
              createPass = 0;
              createTime = 1000*Math.random() + 5000;
              durTime = avarageDurTime + parseInt(avarageDurTime*Math.random()-avarageDurTime/2)/4;
            }
    

            for (var i = powerXes.length-1,p; i >= 0 ; i--) {
              p = powerXes[i];
              p.pass += detal;
              p.powerX = (easing.easeOutQuad(p.pass, p.initDis, p.moveDis, p.dur));
              if (p.powerX >= p.moveDis) {
                powerXes.splice(i,1);
              }
            setPointsData(p.powerX, p.datas);
            }

          draw(pointsData.left);
          draw(pointsData.right);
        }
        return clock; 
    }


    var timer = TIME.getTimer(cvs, ctx, 'soundwave', function() {
      timer.add({clock: getClock()});
    });

    timer.start();

      
  })();
</script>