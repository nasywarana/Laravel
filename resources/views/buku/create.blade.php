<b> C R E A T E  D A T A B U K U</b>
<br>  
<br>
<form method="POST"
      action="/Buku">
      {{ csrf_field() }}
<input type="text" name="txt_id" />
<br>
<br>
<input type="text" name="txt_nama" />
<br>
<br>
<input type="text" name="txt_pengarang" />
<br>
<br>
<input type="text" name="txt_harga" />
<br>
<br>
<input type="submit"
       id="sbm_save"
       nama="sbm_save"
       pengarang="sbm_save"
       harga="sbm_save"
       value="save" />
</form>