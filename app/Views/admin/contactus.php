
         <div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Contact Us </h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th class="serial">#</th>
                                       <th>ID</th>
                                       <th>Name</th>
                                       <th>Email</th>
                                       <th>Mobile</th>
                                       <th>Comment</th>
                                       <th>Date</th>
                                       <th></th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                     <?php foreach ($data as $category): ?>
                                     <tr>
                                       <td><?= $category['id'] ?></td>
                                       <td><?= $category['id'] ?></td>
                                       <td><?= $category['name'] ?></td>
                                       <td><?= $category['email'] ?></td>
                                       <td><?= $category['mobile'] ?></td>
                                       <td><?= $category['comment'] ?></td>
                                       <td><?= $category['added_on'] ?></td>
                                       <td>
                                         <a href="<?= site_url('dashboard/deletecomment/' . $category['id']) ?>"
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
