<script>
    starrating();
    function starrating(){
            var x=parseFloat(document.querySelector('input[name="1rating"]:checked').value);
            
            var parm2=parseFloat(document.querySelector('input[name="2rating"]:checked').value);
            
            var parm3=parseFloat(document.querySelector('input[name="3rating"]:checked').value);
            
            var parm4=parseFloat(document.querySelector('input[name="4rating"]:checked').value);
        }
    </script>
    <?php
     $content="<script>document.write(x)</script>";
     echo $content;
    ?>