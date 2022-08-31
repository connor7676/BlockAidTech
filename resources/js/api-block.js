<script>
    var status = <?php echo $statusval; ?>
    
    // Create socket variables
    if(status < 2 && status != -2){
    var addr =  document.getElementById("address").innerHTML;
    var wsuri2 = "wss://www.blockonomics.co/payment/"+ addr;
    // Create socket and monitor
    var socket = new WebSocket(wsuri2, "protocolOne")
        socket.onmessage = function(event){
            console.log(event.data);
            response = JSON.parse(event.data);
            //Refresh page if payment moved up one status
            if (response.status > status)
              setTimeout(function(){ window.location=window.location }, 1000);
        }
    }
</script>