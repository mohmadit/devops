<?php
// إذا كنت تستخدم جلسات PHP، يجب بدء الجلسة هنا
// على سبيل المثال: session_start();
?>

<!-- Modal for Edit Project -->
<div class="modal fade" id="editProjectModal" tabindex="-1" role="dialog" aria-labelledby="editProjectModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editProjectModalLabel">Edit Project</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Here goes your edit form -->
        <!-- You can use PHP to fill the form with project details -->
        <!-- For example, you can use $_GET or $_POST to get project id -->
        <!-- Then fetch project details from database and fill the form -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
