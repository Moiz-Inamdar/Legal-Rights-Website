 <!-- Row -->

        <div class="main-content side-content pt-0" style="margin-top: 20px">

            <div class="container-fluid">
                <div class="inner-body">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div>
                                        <h6 class="main-content-label mb-3">
                                            <?= $pageTitle ?>
                                        </h6>
                                        <div class="d-flex flex-row justify-content-end mg-b-20">
                                            <button class="btn ripple btn-primary float-right mb-2"
                                                data-target="#add-edit-modal" data-toggle="modal"
                                                onclick="editData(null,null,null,null,null)">
                                                <i class="fe fe-plus"></i> Add
                                            </button>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table id="example1"
                                            class="table table-bordered border-t0 key-buttons text-nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th>Categories</th>
                                                    <th>Description</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php if (!empty($list)) {
                                                    $i = 1;
                                                    foreach ($list as $row) { ?>
                                                        <tr>
                                                            <td>
                                                                <?= $row['CATEGORY_NAME'] ?>
                                                            </td>
                                                            <td>
                                                                <?= $row['CATEGORY_DESCRIPTION'] ?>
                                                            </td>
                                                            <td>

                                                                <button
                                                                    onclick="editData('<?php echo $row['CATEGORY_ID']; ?>','<?php echo $row['CATEGORY_NAME']; ?>','<?php echo $row['CATEGORY_DESCRIPTION']; ?>')"
                                                                    data-target="#add-edit-modal " data-toggle="modal"
                                                                    class="btn ripple btn-success btn-sm">
                                                                    <i class="fe fe-edit"></i>Edit
                                                                </button>

                                                                <button onclick="deleteData('<?php echo $row['CATEGORY_ID']; ?>','CATEGORIES')"
                                                                    data-target="#delete-modal" data-toggle="modal"
                                                                    class="btn ripple btn-danger btn-sm">
                                                                    <i class="fe fe-trash"></i> Delete
                                                                </button>

                                                            </td>
                                                        </tr>
                                                        <?php $i++;
                                                    }
                                                } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Add/Edit Modal -->
                    <div class="modal fade" id="add-edit-modal">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content modal-content-demo">
                                <div class="modal-header">
                                    <h6 class="modal-title">Add/Edit <?= $pageTitle ?></h6>
                                    <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form id="add-edit-form" enctype="multipart/form-data"
                                    action="<?= base_url('category-save') ?>" method="post">
                                    <input type="text" hidden class="form-control" name="edit_id" id="edit-id">

                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6 mg-b-5">
                                                <p class="mg-b-10">Name</p>
                                                <input type="text" class="form-control" name="category_name"
                                                    id="category-name" placeholder="Enter Category">
                                            </div>
                                            <div class="col-md-6 mg-b-5">
                                                <p class="mg-b-10">Description</p>
                                                <textarea class="form-control" name="category_description"
                                                    id="category-description"></textarea>

                                            </div>
                                            <!-- <div class="col-md-6 mg-b-5">
                                                <p class="mg-b-10">Category</p>
                                                <select class="form-control select2" name="category"
                                                    id="category">
                                                    <option value="" disabled>Select Category</option>
                                                    <option value="1">Citizen</option>
                                                    <option value="2">Labour</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mg-b-5">
                                                <p class="mg-b-10">Law</p>
                                                <select class="form-control select2" name="category_law" id="category-law">
                                                    <option value="" disabled>Select Law</option>
                                                    <option value="1">Citizen Law</option>
                                                    <option value="2">Labour Law</option>
                                                    
                                                </select>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn ripple btn-primary" type="submit">Submit</button>
                                        <button class="btn ripple btn-secondary" data-dismiss="modal"
                                            type="button">Close</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--End Add/Edit Modal -->

                    <!-- Delete modal -->
                    <?php echo view('deleteModel') ?>

                    <!-- End Delete modal -->

                </div>
            </div>
        </div>

        <!-- Scripts -->
        <script>
            function editData(id, name, description) {
                $('#edit-id').val(id);
                $('#category_name').val(name);
                $('#category_description').val(description);
               
            }

            
        </script>

        <script>
            $(document).ready(function () {
                $('#add-edit-form').bootstrapValidator({
                    fields: {
                        category_name: {
                            validators: {
                                notEmpty: {
                                    message: 'Name is required'
                                },
                            }
                        },
                        category_description: {
                            validators: {
                                notEmpty: {
                                    message: 'Description is required'
                                },
                            }
                        },
                        // right_category: {
                        //     validators: {
                        //         notEmpty: {
                        //             message: 'Category is required'
                        //         },
                        //     }
                        // },
                        // right_law: {
                        //     validators: {
                        //         notEmpty: {
                        //             message: 'Law is required'
                        //         },
                        //     }
                        // },
                    }
                }).on('success.form.bv', function (e) {
                    showLoader()
                    $(this)[0].submit();
                });
            });
        </script>

        