<html>
<body>
<script language="Javascript">
    webcam.set({
        width: 490,
        height:390,
        image_format: 'jpeg',
        jpeg_quality: 100
    });

    webcam.attach('#my_camera');
    function take_snapshot() {
        webcam.snap(function(data_uri) {
            $(".image-tag").val(data_uri);
            document.getElemmentById('results').innerHTML = '<img src="'+data_uri+'"/>';
        });
    }
</script>
  
</body>
</html>
