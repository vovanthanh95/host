<div id="contte"></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.2.0/socket.io.js" integrity="sha512-WL6WGKMPBiM9PnHRYIn5YEtq0Z8XP4fkVb4qy7PP4vhmYQErJ/dySyXuFIMDf1eEYCXCrQrMJfkNwKc9gsjTjA==" crossorigin="anonymous" referrerpolicy="no-referrer">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  var a = "";
  var socket = io("http://localhost:3003", {
    secure: false,
    transports: ["websocket", "polling"]
  });
  //lawng nghe su kien server gui ve
  socket.on("hello", (arg) => {
    $("#contte").html(arg);
  });

  $(document).ready(function() {
    $('#ffname').keyup(function(event) {
      var keyCode = event.which;
      if (keyCode == 13) {
        //gui data len server
        console.log("enter");
        socket.emit("send", $('#ffname').val());
      }
    });

  });
</script>

<input type="text" id="ffname" name="ffname"><br>
