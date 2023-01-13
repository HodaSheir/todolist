window.onload = function () {
	$('.datepicker').datepicker({
	  format: 'yyyy-mm-dd',
	  startDate: '-3d'
	})

	taskCompleted = function(id){
		$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
      });
      $.ajax({
               type:'POST',
               url:'/completeTask',
               data: {task_id: id} ,
               success:function() {
               	location.reload();
            	}
      });
	}

	editTask = function(id){
		$('#task-edit-form').show();
		$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
      });
      $.ajax({
               type:'GET',
               url:'/getTask/'+id,
               success:function(data) {
               	$('#edit_title').val(data.title);
               	$('#edit_desc').html(data.description);
               	$('#new_date').val(data.due_date);
               	$('#task_id').val(data.id);
            	}
      });

	}

	deleteTask = function(id){
		$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
      });
      $.ajax({
               type:'GET',
               url:'/deleteTask/'+id,
               success:function() {
               	location.reload();
            	}
      });
	}

	addTask = function(){
		$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
		var formData = {
         title: $('#title').val(),
         description: $('#description').val(),
         due_date: $('#due_date').val(),
      };
		$.ajax({
               type:'POST',
               url:'/addTask',
               data:formData,
               success:function(data) {
               	 $('#title').val('');
               	 $('#description').val('');
               	 $('#due_date').val('');
               	 location.reload();
            	}
      		});
	}

	updateTask = function(){
		$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
      });
      var formData = {
         title: $('#edit_title').val(),
         description: $('#edit_desc').val(),
         due_date: $('#new_date').val(),
         task_id : $('#task_id').val()
      };
      $.ajax({
               type:'POST',
               url:'/updateTask',
               data:formData,
               success:function() {
               	 location.reload();
            	}
      		});

	}

	returnTask = function(id){
		$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
      });
      $.ajax({
               type:'POST',
               url:'/returnTask',
               data: {task_id: id} ,
               success:function() {
               	location.reload();
            	}
      });
	}

    cancelUpdate = function(){
        $('#task-edit-form').hide();
    }

};