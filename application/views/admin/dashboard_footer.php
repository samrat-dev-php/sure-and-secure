<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<!--<script src="--><?php //echo base_url(); ?><!--plugins/jquery/jquery.min.js"></script>-->
<!-- Bootstrap -->
<script src="<?php echo base_url(); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="<?php echo base_url(); ?>js/admin/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<!--<script src="--><?php //echo base_url(); ?><!--plugins/chart.js/Chart.min.js"></script>-->
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>js/admin/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!--<script src="--><?php //echo base_url(); ?><!--js/admin/dashboard3.js"></script>-->

<script>
  function sns_lstore(tag, val){
    if (typeof(Storage) !== "undefined") {
      var defaultdata = JSON.stringify({"author": "Samrat"});
      if(tag){
        var data = localStorage.getItem("sure_nsecure_storage") || defaultdata;
        var prevData = JSON.parse(data);
        // console.log(typeof prevData)
        prevData[tag] = val;
        localStorage.setItem("sure_nsecure_storage", JSON.stringify(prevData));
      } else {
        var data = localStorage.getItem("sure_nsecure_storage") || defaultdata;
        var prevData = JSON.parse(data);
        return prevData;
      }
    }
  };
  function sns_ls_state_save(){
     var data = sns_lstore();
    //  console.log('prevData',data);
     try {
       for (const [key, value] of Object.entries(data)) {
         if(value === true){
           var elm = $(`[href='${key}']`).parent("li"); //.html(); 
          //  console.log(`${key}: ${value}`);
          elm.addClass("menu-is-opening menu-open");
         }
       }
     } catch(err){
      console.log(err);
     }
  };

  function sns_ls_state_trigger_init(){
   // do something
   $("[lstore]").each(function(){
      $(this).on('click', function () {
        var tag = $(this).attr("href");
        var isopen = $(this).parent("li").hasClass("menu-open") ? false : true;
        // console.log(tag, isopen);
        sns_lstore(tag, isopen);
      });
    });
  };

  $(document).ready(function(){
    setTimeout(() => {
      sns_ls_state_save();
    }, 100);
    sns_ls_state_trigger_init();
  });
</script>
