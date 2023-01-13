<div id="task-edit-form"  style="display: none;" >
        <div class="card task-edit-card">
            <h2>Task Editing</h2>
            <div class="card-body">
                <div class="edit-task" >
                    <div class="form-group">
                        <input class="form-text" type="text" id="edit_title" >
                        <textarea id="edit_desc" class="form-control" name="edit_desc" rows="5" placeholder="update task description ..."></textarea>
                        <div class="input-group date date-style" data-provide="datepicker">
                          <input id="new_date"  type="text" class="form-control" 
                          placeholder="Please update due date ...">
                          <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                          </div>
                        </div>
                        <input type="hidden" id="task_id" val="" >
                        <button onclick="updateTask()" class="btn btn-todo">Update</button>
                        <button onclick="cancelUpdate()" class="btn btn-dark">Cancel</button>

                    </div>
                </div>
            </div>
        </div>
    
</div>
