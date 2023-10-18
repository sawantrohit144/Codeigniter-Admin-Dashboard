
         <div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Products</h4>
                           <h4 class="box-link"><a href="<?= site_url('dashboard/addproduct'); ?>">Add Product</a></h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th class="serial">#</th>
                                       <th>ID</th>
                                       <th>Categories</th>
                                       <th>Name</th>
                                       <th>Image</th>
                                       <th>MRP</th>
                                       <th>Price</th>
                                       <th>Qty</th>
                                       <th></th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                     <?php foreach ($data as $product): ?>
                                     <tr>
                                       <td><?= $product['id'] ?></td>
                                       <td><?= $product['id'] ?></td>
                                       <td><?= $product['category_name'] ?></td>
                                       <td><?= $product['name'] ?></td>
                                       <td><img src="<?= site_url('uploads/' . $product['image']) ?>" width="50" height="50"/></td>
                                       <td><?= $product['mrp'] ?></td>
                                       <td><?= $product['price'] ?></td>
                                       <td><?= $product['qty'] ?></td>
                                       <td>
                                         <a href="<?= site_url('dashboard/updateproduct/'. $product['id']) ?>"
                                           class="btn btn-primary btn-sm">Edit</a>
                                         <a href="<?= site_url('dashboard/deleteproduct/' . $product['id']) ?>"
                                           class="btn btn-danger btn-sm">Delete</a>
                                       </td>
                                     </tr>
                                     <?php endforeach; ?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
		  </div>
         <div class="clearfix"></div>
