

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
                                                    <th>Name</th>
                                                    <th>Description</th>
                                                    <th>Year Enacted</th>
                                                    <th>Category</th>
                                                    <th>Links</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php if (!empty($list)) {
                                                    $i = 1;
                                                    foreach ($list as $row) { ?>
                                                        <tr>
                                                            <td>
                                                                <?= $row['LAW_NAME'] ?>
                                                            </td>
                                                            <td>
                                                                <?= $row['LAW_DESCRIPTION'] ?>
                                                            </td>
                                                            <td>
                                                                <?= $row['LAW_YEAR_ENACTED'] ?>
                                                            </td>
                                                            <td>
                                                                <?= $row['LAW_CATEGORY_ID'] ?>
                                                            </td>
                                                            <td>
                                                                <?= $row['LAW_LINK'] ?>
                                                            </td>
                                                            <td>

                                                                <button
                                                                    onclick="editData('<?php echo $row['LAW_ID']; ?>','<?php echo $row['LAW_NAME']; ?>','<?php echo $row['LAW_DESCRIPTION']; ?>',
                                                                    '<?php echo $row['LAW_YEAR_ENACTED']; ?>','<?php echo $row['LAW_LINK']; ?>','<?php echo $row['LAW_CATEGORY_ID']; ?>')"


                                                                    data-target="#add-edit-modal " data-toggle="modal"
                                                                    class="btn ripple btn-success btn-sm">
                                                                    <i class="fe fe-edit"></i>Edit
                                                                </button>

                                                                <button onclick="deleteData('<?php echo $row['LAW_ID']; ?>','LAWS')"
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
                                    action="<?= base_url('law-save') ?>" method="post">
                                    <input type="text" hidden class="form-control" name="edit_id" id="edit-id">

                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6 mg-b-5">
                                                <p class="mg-b-10">Name</p>
                                                <input type="text" class="form-control" name="law_name"
                                                    id="law-name" placeholder="Enter law name">
                                            </div>
                                            <div class="col-md-6 mg-b-5">
                                                <p class="mg-b-10">Description</p>
                                                <textarea class="form-control" name="law_description"
                                                    id="law-description"></textarea>

                                            </div>
                                            <div class="col-md-6 mg-b-5">
                                                <p class="mg-b-10">Year Enacted</p>
                                                <input type="number" class="form-control" name="year_enacted"
                                                    id="year-enacted" placeholder="Enter Year Enacted">
                                            </div>
                                            <div class="col-md-6 mg-b-5">
                                                <p class="mg-b-10">Category</p>
                                                <input type="text" class="form-control" name="law_category"
                                                    id="law-category" placeholder="">
                                            </div>
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
            function editData(id, name, description,year, link,category) {
                $('#edit-id').val(id);
                $('#law-name').val(name);
                $('#law-description').val(description);
                $('#year-enacted').val(year);
                $('#law-link').val(link);
                $('#law-category').val(category);

            }

            
        </script>

        <script>
            $(document).ready(function () {
                $('#add-edit-form').bootstrapValidator({
                    fields: {
                        law_name: {
                            validators: {
                                notEmpty: {
                                    message: 'Title is required'
                                },
                            }
                        },
                        law_description: {
                            validators: {
                                notEmpty: {
                                    message: 'Description is required'
                                },
                            }
                        },
                        year_enacted: {
                            validators: {
                                notEmpty: {
                                    message: 'year is required'
                                },
                            }
                        },
                        law_link: {
                            validators: {
                                notEmpty: {
                                    message: 'Link is required'
                                },
                            }
                        },
                        law_category: {
                            validators: {
                                notEmpty: {
                                    message: 'Category is required'
                                },
                            }
                        },
                    }
                }).on('success.form.bv', function (e) {
                    showLoader()
                    $(this)[0].submit();
                });
            });
        </script>

       