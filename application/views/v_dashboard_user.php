<h2>Welcome</h2>
<div class="col-md-12">
  <div class="row">
    <div id="tampilkan_barang">
    </div>
  </div>
</div>
<script type="text/javascript">
$.getJSON("<?=base_url()?>index.php/get_barang",function(data1){
 var datanya="";
 $.each(data1,function(key.dt){
   datanya+=
'<div class="col-xs-6 col-and-3"><a href="#detail_barang" '+
'class="thumbnail text-center" data-toggle="modal" onclick="tm_detail('+dt['id barang']+ ')" style="text-decoration:none">'+
'<img style="height:100px" src="<?=base_url('assets/gambar/')?>'+
dt['gambar']+'" alt="...">'+dt['nama_barang']+ '<br>'+dt['harga']+
'</a>'+
'</div>';
});
 $("#tampil_barang").html(datanya);
});

</script>
