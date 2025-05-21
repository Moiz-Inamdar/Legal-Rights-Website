<!-- Delete modal -->
<div class="modal fade" id="delete-modal">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content modal-content-demo " style="border-radius:20px">

            <form id="delete-form" action="<?php echo base_url('delete-data') ?>" method="Post">
                <div class="modal-body">
                    <h2 class="text-center">
                        <i class="fe fe-x-circle text-warning" style="font-size:60px"></i>
                    </h2>

                    <h3 class="mt-4 mb-3 text-warning text-center">Message Warning</h3>
                    <input type="hidden" name="deleteId" id="deleteId" />
                    <input type="hidden" name="module" id="module" />

                    <p class="tx-14 text-center text-dark">
                        Are you sure to delete this you won't recover it after delete.
                    </p>

                </div>
                <div class="text-center pb-3">
                    <button class="btn ripple btn-primary " type="submit" onclick="showLoader()">Yes</button>
                    <button class="btn ripple btn-danger " data-dismiss="modal" type="button">No</button>
                </div>

            </form>
        </div>
    </div>
</div>
<script>
    function deleteData(id, module) {
        $('#deleteId').val(id);
        $('#module').val(module);

    }
</script>
<!-- End Delete modal -->