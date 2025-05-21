
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
                                                onclick="editData(null,null,null)">
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
                                                    <th>Content</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php if (!empty($list)) {
                                                    $i = 1;
                                                    foreach ($list as $row) { ?>
                                                        <tr>
                                                            <td>
                                                                <?= $row['ARTICLE_TITLE'] ?>
                                                            </td>
                                                            <td>
                                                                <?= wordwrap($row['ARTICLE_CONTENT'],30,"<br> \n") ?>
                                                            </td>
                                                            <!-- <td>
                                                                <?= $row['ARTICLE_AUTHOR'] ?>
                                                            </td>
                                                            <td>
                                                            <?= $row['ARTICLE_PUBLISHED'] ?>
                                                            </td> -->
                                                            <td>

                                                                <button
                                                                onclick="editData('<?php echo $row['ARTICLE_ID']; ?>','<?php echo $row['ARTICLE_TITLE']; ?>','<?php echo $row['ARTICLE_CONTENT']; ?>')"

                                                                    data-target="#add-edit-modal " data-toggle="modal"
                                                                    class="btn ripple btn-success btn-sm">
                                                                    <i class="fe fe-edit"></i>Edit
                                                                </button>

                                                                <button onclick="deleteData('<?php echo $row['ARTICLE_ID']; ?>','ARTICLE')"
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
                                    action="<?= base_url('article-save') ?>" method="post">
                                    <input type="text" hidden class="form-control" name="edit_id" id="edit-id">

                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6 mg-b-5">
                                                <p class="mg-b-10">Title</p>
                                                <input type="text" class="form-control" name="article_title"
                                                    id="article-title" placeholder="Enter title">
                                            </div>
                                            <div class="col-md-6 mg-b-5">
                                                <p class="mg-b-10">Content</p>
                                                <textarea class="form-control" name="article_content"
                                                    id="article-content"></textarea>

                                            </div>
                                            <!-- <div class="col-md-6 mg-b-5">
                                                <p class="mg-b-10">Author</p>
                                                <input type="text" class="form-control" name="article_author"
                                                    id="article-author" placeholder="">
                                            </div> -->
                                            <!-- <div class="col-md-6 mg-b-5">
                                                <p class="mg-b-10">Published</p>
                                                <input type="number" class="form-control" name="article_published"
                                                    id="article-published" placeholder="">
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

                    

                </div>
            </div>
        </div>
        <!-- delete modal -->
        <?php echo view('deleteModel') ?>
           
        <!-- Scripts -->
        <script>
            function editData(id, title, content) {
                $('#edit-id').val(id);
                $('#article-title').val(title);
                $('#article-content').val(description);
                
            }

            
        </script>

        <script>
            $(document).ready(function () {
                $('#add-edit-form').bootstrapValidator({
                    fields: {
                        article_title: {
                            validators: {
                                notEmpty: {
                                    message: 'Title is required'
                                },
                            }
                        },
                        article_content: {
                            validators: {
                                notEmpty: {
                                    message: 'Description is required'
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

      