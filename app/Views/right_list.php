
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
                                            <!-- <?php print_r($list) ?> -->
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
                                                    <th>Title</th>
                                                    <th>Description</th>
                                                    
                                                    <th>Article</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php if (!empty($list)) {
                                                    $i = 1;
                                                    foreach ($list as $row) { ?>
                                                        <tr>
                                                            <td>
                                                                <?= $row['RIGHT_TITLE']?>
                                                            </td>
                                                            <td>
                                                                <?= wordwrap($row['RIGHT_DESCRIPTION'],45,"<br> \n") ?>
                                                            </td>
                                                            <td>
                                                                <?= $row['ARTICLE_TITLE'] ?>
                                                            </td>
                                                            
                                                            <td>

                                                                <button
                                                                    onclick="editData('<?php echo $row['RIGHT_ID']; ?>','<?php echo $row['RIGHT_TITLE']; ?>','<?php echo $row['RIGHT_DESCRIPTION']; ?>','<?php echo $row['RIGHT_ARTICLE_ID']; ?>')"
                                                                    data-target="#add-edit-modal " data-toggle="modal"
                                                                    class="btn ripple btn-success btn-sm">
                                                                    <i class="fe fe-edit"></i>Edit
                                                                </button>

                                                                <button onclick="deleteData('<?php echo $row['RIGHT_ID']; ?>','RIGHTS')"
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
                                    action="<?= base_url('right-save') ?>" method="post">
                                    <input type="text" hidden class="form-control" name="edit_id" id="edit-id">

                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6 mg-b-5">
                                                <p class="mg-b-10">Title</p>
                                                <input type="text" class="form-control" name="right_title"
                                                    id="right-title" placeholder="Enter title">
                                            </div>
                                            <div class="col-md-6 mg-b-5">
                                                <p class="mg-b-10">Description</p>
                                                <textarea class="form-control" name="right_description"
                                                    id="right-description"></textarea>

                                            </div>
                                            <div class="col-md-6 mg-b-5">
                                            <p class="mg-b-10">Article</p>
                                                <select name="right_article" id="right-article" class="form-control">
                                                    <?php foreach ($articles as $article): ?>
                                                        <option value="<?= esc($article['ARTICLE_ID']) ?>"><?= esc($article['ARTICLE_TITLE']) ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <!-- <div class="col-md-6 mg-b-5">
                                                <p class="mg-b-10">Article</p>
                                                <input type="number" class="form-control" name="right_article"
                                                    id="right-article" placeholder="Enter Article">
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
            function editData(id, title, description, article) {
                $('#edit-id').val(id);
                $('#right-title').val(title);
                $('#right-description').val(description);
                $('#right-article').val(article);
            }

            
        </script>

        <script>
            $(document).ready(function () {
                $('#add-edit-form').bootstrapValidator({
                    fields: {
                        right_title: {
                            validators: {
                                notEmpty: {
                                    message: 'Title is required'
                                },
                            }
                        },
                        right_description: {
                            validators: {
                                notEmpty: {
                                    message: 'Description is required'
                                },
                            }
                        },
                        right_category: {
                            validators: {
                                notEmpty: {
                                    message: 'Category is required'
                                },
                            }
                        },
                        right_law: {
                            validators: {
                                notEmpty: {
                                    message: 'Law is required'
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

