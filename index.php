<!DOCTYPE html>
<html lang="fr">
<head>
  
    <title>Bkz-technologie</title>
</head>
<body>
  <?php 
   include("link.html");
  ?>
<div id="body"> 
  elements ABC 
<?php    
    include("view/header.php");
    include("view/section.php");
    include("view/footer.php");
 
?>
</div>
<script>
    var app = new Vue({
  el: '#body',
  data: {
    title_page:'BKZ-Technologie'      
  },
  methods:{
   /* presentation:function(){
      return "Bonjour";
    }
    */
  }
})
</script>
 
    
</body>
</html>