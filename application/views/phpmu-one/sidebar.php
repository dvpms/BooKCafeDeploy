          <div class="hidden-xs">
            <p class='sidebar-title'> &nbsp; Kategori Produk</p>
            <?php 
              $kategori = $this->model_app->view('rb_kategori_produk');
              foreach ($kategori->result_array() as $row) {
                echo "<a style='text-align:left' class='btn btn-sm btn-block btn-primary' href='".base_url()."produk/kategori/$row[kategori_seo]'><span class='glyphicon glyphicon-record'></span> $row[nama_kategori]</a>";
              }
            ?>
            </div>
            
