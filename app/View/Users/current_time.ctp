<input type="button" id="getTime" value="Get local time" onclick="update_time()">

<div id="local_time"></div>

<script>

function update_time() {
    $.get("/cakephp/users/get_time_update", function(data) {
        $('#local_time').text(data);
    });
    
    
}

</script>