<?php 
#@header
define("Titulo", "Jorgedipra");
include 'partials/header_partials.php'; 
#@END::header
?>
<?=Console::log('_variable', ['Autor'=>$Landing_home["Nombre"]],'table',$debug)?>

    <temaplate-header id="temaplate-header">
    </temaplate-header>
    
    <div id="app"></div>
    
    <temaplate-footer id="temaplate-footer">
    </temaplate-footer>

<script src="<?=host('js','main')?>"></script>
<script>
        MyLibrary.createDatePicker('#temaplate-header', { format: "hola",a1: "<?='hola'?>" });
        MyLibrary.createDatePicker2('#temaplate-footer', { format: "..." });

        MyLibrary.createDatePicker3('#app', { format: "..." });        
</script>
<?php 
#footer/Scripts
include 'partials/footer_partials.php'; 
#@END::footer
?>