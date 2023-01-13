<div class="card task-card">
    <div class="card-body">
        <h1>Create Task</h1>
        <div class="create-task" >
            <div class="form-group">
                <input id="title" name="title" class="form-text" type="text" placeholder="Enter Task title...">
                <textarea id="description" class="form-control" name="description" rows="5" placeholder="Enter task description ..."></textarea>
                <div class="input-group date date-style" data-provide="datepicker">
                  <input id="due_date" name="due_date" type="text" class="form-control" 
                  placeholder="Please enter due date ...">
                  <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                  </div>
                </div>
                <button onclick="addTask()" class="btn btn-todo">Add</button>
            </div>
        </div>
    </div>
</div>
