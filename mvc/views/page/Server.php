
    <div id="contte"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.2.0/socket.io.js" integrity="sha512-WL6WGKMPBiM9PnHRYIn5YEtq0Z8XP4fkVb4qy7PP4vhmYQErJ/dySyXuFIMDf1eEYCXCrQrMJfkNwKc9gsjTjA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  var a = "";
    var socket = io("http://localhost:3000",{
      secure: true,
      transports: ["websocket","polling"]
    });
    //lawng nghe su kien server gui ve
    socket.on("hello", (arg) => {
        $("#contte").html(arg);
  });

$(document).ready(function(){
  $('#ffname').keyup(function(event){
      var keyCode = event.which;
      if (keyCode == 13) {
        //gui data len server
        console.log("ente");
        socket.emit("send", $('#ffname').val());
      }
  });

});

</script>

<input type="text" id="ffname" name="ffname"><br>
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div id="tradingview_915b4"></div>
  <div class="tradingview-widget-copyright"><a href="https://vn.tradingview.com/symbols/BTCUSDT/?exchange=BINANCE" rel="noopener" target="_blank"><span class="blue-text">BTCUSDT Biểu đồ</span> </a> bởi TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": 900,
  "height": 610,
  "symbol": "BINANCE:BTCUSDT",
  "interval": "D",
  "timezone": "Asia/Bangkok",
  "theme": "dark",
  "style": "1",
  "locale": "vi_VN",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "hide_side_toolbar": false,
  "allow_symbol_change": true,
  "save_image": false,
  "details": true,
  "studies": [
    "IchimokuCloud@tv-basicstudies"
  ],
  "container_id": "tradingview_915b4"
}
  );
  </script>
</div>
<!-- TradingView Widget END -->
