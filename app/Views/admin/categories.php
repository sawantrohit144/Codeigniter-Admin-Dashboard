
         <div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Categories </h4>
                           <h4 class="box-link"><a href="<?= site_url('dashboard/addcategories'); ?>">Add Categories</a></h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th class="serial">#</th>
                                       <th>ID</th>
                                       <th>Categories</th>
                                       <th></th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                     <?php foreach ($data as $category): ?>
                                     <tr>
                                       <td><?= $category['id'] ?></td>
                                       <td><?= $category['id'] ?></td>
                                       <td><?= $category['categories'] ?></td>
                                       <td>
                                         <a href="<?= site_url('dashboard/updatecategory/'. $category['id']) ?>"
                                           class="btn btn-primary btn-sm">Edit</a>
                                         <a href="<?= site_url('dashboard/deletecategory/' . $category['id']) ?>"
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
